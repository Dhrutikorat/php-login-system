<?php 
    //define constant 
    define('__CONFIG__',true);

    require_once('inc/config.php');
    include_once('inc/header.php');

    echo $_SESSION['user_id']. 'is your user id';
?>