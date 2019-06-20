<?php
/**
 * Author: Moshihui（86146002@qq.com)
 */

namespace App\Console\Commands;

// uses

use Cache;
use DateTime;
use Illuminate\Console\Command;

class GitPushCommand extends Command {
    
    public $signature = 'git {comment*}';
    
    public function handle() {
        $is_clean = false;
        // chdir(dirname(base_path()));
        
        // $versions = Cache::get('git_versions', []);
        
        // $newVer = $versions[$ver] ?: 0;
        //$versions[$ver] = $newVer + 1;
        //Cache::forever('git_versions', $versions);
        //$comment = trim('['.$ver.'.'.$newVer.'] '.implode(' ', $this->argument('comment')));
        $comment = trim('['.$this->getVersion($is_clean).'] '.implode(' ', $this->argument('comment')));
        
        //print shell_exec("git push dev --all");
        if(file_exists(getcwd()."/.gitmodules") && $modules = trim(shell_exec("git submodule"))) {
            $curdir = getcwd();
            
            foreach(explode("\n", $modules) as $line) {
                list($hash, $path) = preg_split("/\s+/", trim($line), 2);
                if(preg_match("/^(.+)\(/", $path, $out)) {
                    $path = trim($out[1]);
                }
                //var_dump($path,is_dir($curdir."/$path/"));
                if(is_dir($curdir."/$path/.git")) {
                    $this->info($path);
                    chdir("$curdir/$path");
                    shell_exec('git add -A');
                    $r = shell_exec("git commit -m \"$comment\"");
                    if(strpos($r, 'nothing to commit, working tree clean') === false ||
                        strpos($r, 'nothing to commit, working tree clean') && strpos($r, "Changes not staged for commit")) {
                        echo "\n".str_pad(" $path ", 70, "=", STR_PAD_BOTH)."\n";
                        print $r;
                    }
                    passthru("git push origin --all");
                    chdir($curdir);
                }
            }
            echo "\n".str_pad("", 70, "=", STR_PAD_BOTH)."\n";
        }
        if( ! $is_clean) {
            print shell_exec("git log --stat -1");
        }
        print shell_exec('git add -A');
        passthru("git commit -m \"$comment\"");
        foreach($this->listRemotes() as $name) {
            passthru("git push $name --all");
        }
        
        $this->info(PHP_EOL.$comment);
    }
    
    public function getVersion(&$is_clean = false) {
        static $version;
        if($version) {
            return $version;
        }
        $days = $this->config('days_diff');
        // echo $days;
        $is_clean = strpos(shell_exec("git status"), "nothing to commit, working tree clean") !== false;
        $weeks = intval($days / 7);
        $day = $this->mod($days, 7);
        $countData = Cache::store('file')->get($cachename = "git.version.$weeks")
            ?: Cache::store('file')->get('git.'.$this->getGitOrigin().".version.$weeks", []);
        if( ! $is_clean) {
            $countData['week_count'] += 1;
            $countData[$day] += 1;
            Cache::store('file')->forever($cachename, $countData);
        }
        $curWeekCount = $countData['week_count'] ?: 0;
        $curDayCount = $countData[$day] ?: 0;
        //$ver = (date('Y') - 2017).date('.njw.').intval(date('H'));
        return $version = date("$weeks.$day.").($curWeekCount == $curDayCount ? 0 : $curWeekCount).".$curDayCount";
    }
    
    public function config($name) {
        $config =  [
            "start_time" => strtotime("2018/10/25 07:22:00"), // 耿总电话通知失业的时间
            "days_diff"  => (function() {
                /** @see http://php.net/manual/zh/datetime.diff.php */
                $start = new DateTime();
                $end = new DateTime("2018/10/25 07:22:00");
                $diff = $end->diff($start);
                $diffInDays = (int)$diff->format("%r%a");
                return $diffInDays;
            })(),
        ];
        return $config[$name];
    }
    
    function mod($bn, $sn) {
        return (int)fmod((float)$bn, $sn);
    }
    
    public function getGitOrigin() {
        $url = '';
        foreach(explode("\n", shell_exec("git remote -v")) as $line) {
            list($name, $url) = preg_split("/\s+/", $line);
            if($name == "origin") {
                break;
            }
        }
        return $url;
    }
    
    function listRemotes() {
        $remote = shell_exec("git branch -r");
        $result = [];
        foreach(array_filter(explode("\n", $remote)) as $line) {
            $name = explode("/", $line)[0];
            $result[$name] = $name;
        }
        return $result ?: ['origin' => 'origin'];
    }
}
