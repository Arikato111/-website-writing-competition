<?php 

function getParams($p=-1) {
    $path_ex= explode('/', parse_url($_SERVER['REQUEST_URI'], 5));
    if($p > -1) {
        return $path_ex[$p+1];
    } else {
        return $path_ex[sizeof($path_ex)-1];
    }
}

function fetch($result){ 
    return mysqli_fetch_assoc($result);
}
function fetch_all($result) {
    return mysqli_fetch_all($result, 1);
}