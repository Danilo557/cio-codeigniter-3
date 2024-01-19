<?php


function active_link($route)
{
    $uri = current_url(true);
    $uri= (string) $uri;
    if($route===$uri){
        return 'active';
    }
    return '';
}
