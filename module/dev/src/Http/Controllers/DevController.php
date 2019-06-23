<?php

namespace App\Dev\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use model\admin\admin_menu;

class DevController extends Controller {
    
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index()
    {
        return view('dev::index');
    }
    
    public function makeMenu(admin_menu $model)
    {
        require_once APP_PATH . "/admin/common.php";
        
        $arr = getMenuArr();
        $menu = [];
        $f = $model::fn();
        foreach($arr as $slug => $top) {
            $groupTitle = $top['name'];
            $item = $model::whereUri($slug)->first();
            if( !$item->exists()) {
                $item = $model::create([
                    $f->uri => $slug,
                    $f->title => $top['name'],
                    $f->parent_id => 0,
                    $f->extra__slug => $slug,
                    $f->extra__group => $slug,
                    $f->extra__is_shop => true,
                ]);
                krumo($item->toArray());
            }
            foreach($top['child'] ?: [] as $k2 => $main) {
                foreach($main['child'] as $k4 => $sub) {
                    if( !$model::whereUri($uri = $sub['act'] . "/" . $sub['op'])->exists()) {
                        $item = $model::create([
                            $f->uri => $uri,
                            $f->title => $sub['name'],
                            $f->parent_id => $item->id,
                            $f->extra__slug => $uri,
                            $f->extra__group => $slug,
                            $f->extra__is_shop => true,
                        ]);
                        krumo($item->toArray());
                    }
                }
            }
        }
        $menuConfig = M(admin_menu::class)->all()->keyBy('id')->toArray();
        kd($arr, config('shop.domain'), $menuConfig);
    }
    
    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function create()
    {
        return view('dev::create');
    }
    
    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }
    
    /**
     * Show the specified resource.
     * @param int $id
     * @return Response
     */
    public function show($id)
    {
        return view('dev::show');
    }
    
    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Response
     */
    public function edit($id)
    {
        return view('dev::edit');
    }
    
    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    
    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
