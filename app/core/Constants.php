<?php



// return : current project dir
// example = D:\xampp\htdocs\Proyek1\Develop\
function base($dir = ''){
    $dir = str_replace('/','\\',$dir);
    return str_replace('\\public','',getcwd()).$dir;
}

function asset($dir = ''){
    return BASEURL.'/assets/'.$dir;
}

function img($dir = ''){
    return BASEURL.'/img/'.$dir;
}

function url($dir = ''){
    return BASEURL.'/'.$dir;
}

function view($dir = '', $data = []){
    $dir = str_replace('/','\\',$dir);
    require_once(str_replace('\\public','\\app\\views\\',getcwd()).$dir.'.php');
}

function redirect($url) {
    header("Location: " . BASEURL.'/'.$dir);
    exit;
}