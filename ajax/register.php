<?php
//define constant 
define('__CONFIG__', true);


// require config file
require_once('../inc/config.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    header('content-type:application/json');
    $return = [];
    $return['redirect'] = 'index.php?hello';
    echo json_encode($return, JSON_PRETTY_PRINT);exit;
} else {
    exit('test');
}
