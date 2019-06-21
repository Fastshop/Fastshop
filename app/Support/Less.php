<?php namespace App\Support;

use Illuminate\Contracts\Cache\Repository as Cache;
use Illuminate\Contracts\Config\Repository as Config;

class Less {
    
    const RECOMPILE_ALWAYS = 'always';
    const RECOMPILE_CHANGE = 'change';
    const RECOMPILE_NONE   = 'none';
    
    public static $cache_key = 'less_cache';
    
    protected $config;
    
    protected $jobs;
    
    protected $modified_vars;
    
    protected $parsed_less;
    
    protected $recompiled;
    
    public function __construct(Config $config, Cache $cache) {
        $this->config = $config;
        $this->cache = $cache;
        $this->fresh();
    }
    
    /**
     * Reset current jobs for initiating a new Less instance
     *
     * @return Less
     */
    public function fresh() {
        $this->jobs = [];
        $this->modified_vars = [];
        $this->parsed_less = '';
        $this->recompiled = false;
        
        return $this;
    }
    
    /**
     * Append custom CSS/LESS to CSS resulting file
     *
     * @param string $less
     * @return \Less
     */
    public function parse($less) {
        $this->jobs[] = ['parse', $less];
        $this->parsed_less .= $less.PHP_EOL;
        
        return $this;
    }
    
    /**
     * Set values of LESS variables
     *
     * @param array|string $variables
     * @return \Less
     */
    public function modifyVars($variables) {
        if(is_string($variables)) {
            $variables = $this->parseVariables($variables);
        }
        $this->jobs[] = ['ModifyVars', $variables];
        $this->modified_vars = array_merge($this->modified_vars, $variables);
        
        return $this;
    }
    
    /**
     * Transform plain LESS "<property>: <value>;" into a workable array
     *
     * @param string $less LESS
     * @return array
     **/
    public function parseVariables($less) {
        $variables = [];
        $properties = preg_split('/;\s+/', $less);
        foreach($properties as $property) {
            if(preg_match('/(?:(?<name>[^}:]+):?(?<value>[^};]+);?)/', $property, $matches)) {
                $variables[$matches['name']] = trim($matches['value']);
            }
        }
        
        return $variables;
    }
    
    /**
     * Return output CSS url. Recompile CSS as configured
     *
     * @param string|array $filename
     * @param bool $full_url
     * @return string CSS url
     * @throws \Exception
     * @internal param bool $auto_recompile Automaticly recompile
     */
    public function url($less_path, $css_path = null, $imgurl = null, $full_url = false) {
        $auto_recompile = true;
        if(is_array($less_path)) {
            list($dir, $css_path) = $less_path;
            $less_path = $dir."/".$css_path;
        }
        
        if(empty($css_path)) {
            $css_path = file_exists($less_path) ? str_replace(realpath(public_path()), "", realpath($less_path)) : $less_path;
            $css_path = str_replace('.less', '.css', $css_path);
        }
        $less_path = str_replace('.css', ".less", $less_path);
        if( ! file_exists($less_path)) {
            $less_path = public_path($less_path);
        }
        
        $css_path = trim(trim($css_path),'/');
        
        if($auto_recompile) {
            $recompiled = $this->recompile($less_path, self::RECOMPILE_CHANGE, ['imgdir' => $imgurl]);
            if($recompiled) {
                $css_path = $css_path."?v=".filemtime($recompiled);
            }
        }
        
        $css_path = env('APP_URL')."/$css_path";
        
        //$css_path = $this->config->get('less.link_path', '/css') . '/' . $filename . '.css';
        return $full_url ? asset($css_path) : $css_path;
    }
    
    /**
     * Recompile CSS if needed
     *
     * @param string $filename CSS filename without extension
     * @param string $recompile CSS always (RECOMPILE_ALWAYS), when changed (RECOMPILE_CHANGE) or never
     *                          (RECOMPILE_NONE)
     * @param array $options Extra compile options
     * @return bool true on recompiled, false when not
     * @throws \Exception
     */
    public function recompile($filename, $recompile = null, $options = []) {
        if($this->recompiled === true) {
            return false; // This instance is already recompiled. Recompile a new or the same instance using Less::fresh()
        }
        if(is_null($recompile)) {
            $recompile = env('LESS_RECOMPILE', self::RECOMPILE_CHANGE);
        }
        $this->recompiled = false; // Default value
        switch($recompile) {
            case self::RECOMPILE_ALWAYS :
                $this->recompiled = $this->compile($filename, $options);
                break;
            case self::RECOMPILE_CHANGE :
                $config = $this->prepareConfig($options);
                $filename = preg_replace("/\.css$/", '.less', $filename);
                $input_path = $filename;// is_file($path) ? $path :  $config['less_path'] . DIRECTORY_SEPARATOR . $filename . '.less';
                $cache_key = $this->getCacheKey($filename);
                $cache_value = \Less_Cache::Get([$input_path => asset('/')], $config, $this->modified_vars);
                if($this->cache->get($cache_key) !== $cache_value || ! empty($this->parsed_less)) {
                    $this->cache->put($cache_key, $cache_value, 0);
                    $this->recompiled = $this->compile($filename, $options);
                }
                break;
            case self::RECOMPILE_NONE :
            case null:
                // Do nothing obviously
                break;
            default:
                throw new \Exception('Unknown \''.$recompile.'\' LESS_RECOMPILE setting');
        }
        
        return $this->recompiled;
    }
    
    /**
     * Compile CSS
     *
     * @param string $filename LESS filename without extension
     * @param array $options Compile options
     * @return bool true on succes, false on failure
     * @throws \Exception
     * @throws \Less_Exception_Parser
     */
    public function compile($filename, $options = []) {
        $config = $this->prepareConfig($options);
        $written = false;
        $input_path = $filename;// $config['less_path'] . DIRECTORY_SEPARATOR . $filename . '.less';
        $output_path = preg_replace("/\.less$/", '.css', $filename);
        // $config['public_path'] . DIRECTORY_SEPARATOR . $filename . '.css';
        if( ! file_exists($output_path) || filemtime($input_path) > filemtime($output_path)) {
            $parser = new \Less_Parser($config);
            
            $parser->parseFile($input_path, $config['imgdir'] ?: asset('/'));
            // Iterate through jobs
            foreach($this->jobs as $i => $job) {
                call_user_func_array([$parser, array_shift($job)], $job);
            }
            $written = $this->writeCss($output_path, $parser->getCss());
            // Remove old cache files if succesfully written
            if($written === true) {
                $this->cleanCache();
            }
        }
        
        return $output_path;
    }
    
    /**
     * Get configuration
     *
     * @param array $options
     * @return array Less configuration
     */
    protected function prepareConfig($options = []) {
        $defaults = [
            'compress'    => env('LESS_COMPRESS', false),
            'sourceMap'   => env('LESS_SOURCEMAP', false),
            'cache_dir'   => storage_path('framework/cache/lessphp'),
            'public_path' => public_path('css'),
            'less_path'   => base_path('resources/assets/less'),
            // 'cache_method' => function() {}
        ];
        
        return array_merge($defaults, $this->config->get('system.less', []), $options);
    }
    
    /**
     * Write CSS file to disk
     *
     * @param string $output_path CSS filepath
     * @param string $css CSS
     * @return bool true on succes, false on failure
     */
    protected function writeCss($output_path, $css) {
        return file_put_contents($output_path, $css) !== false;
    }
    
    /**
     * Clean cache
     */
    protected function cleanCache() {
        \Less_Cache::$gc_lifetime = 2; // Inchangeable?
        \Less_Cache::CleanCache();
    }
    
    /**
     * Get filename-based cache key
     *
     * @param string $filename
     * @return  string Cache key
     */
    protected function getCacheKey($filename) {
        return self::$cache_key.'_'.$filename;
    }
}
