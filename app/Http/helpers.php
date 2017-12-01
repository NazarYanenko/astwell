<?php

if(!function_exists('checkbox_boolean')){
    /**
     * @param null $file
     */
    function checkbox_boolean($checkbox = null)
    {
        if($checkbox === 'on'){
            return true;
        }
        return false;
    }
}