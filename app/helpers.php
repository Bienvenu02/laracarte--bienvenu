<?php

if (! function_exists('page_title')){
    function page_title($title){
        $baseTitle = config('app.name');
        if($title === ''){
            return 'Laracarte';
        }else{
            return $title.' | '.$baseTitle;
        }
    }
}


if (! function_exists('set_active_route')){
    function set_active_route($route){
        return Route::is($route) ? 'active' : '';
    }
}