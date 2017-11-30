<?php

if(!function_exists('route_path')){
    /**
     * @param null $file
     */
    function route_path($file = null)
    {
        return __DIR__  . $file;
    }
}