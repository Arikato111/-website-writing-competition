<?php

if(getParams(1) == 'admin') {
    if(!isset($_SESSION['status']) || $_SESSION['status'] != 'admin') {
        return require('./pages/_error.php');
    }
}

if(isset($_SESSION['usr'])) {
    $db->query("UPDATE member SET `mem_view` = `mem_view`+1 WHERE mem_id = "  . $_SESSION['usr']);
}

$path_ex= explode('/', parse_url($_SERVER['REQUEST_URI'], 5));
$pages='./pages';
for($i=2; $i< sizeof($path_ex); $i++) {
    if($path_ex[$i] == '') {
        $pages .= '/index';
    } else {
        $pages .= '/' . $path_ex[$i];
    }
 }

 $pages .='.php';

 if(file_exists($pages) && strpos($pages, '_') === false) {
    require($pages);
 } else {
    require('./pages/_error.php');
 }