<?php
//if there is no constant define here
if(!defined('__CONFIG__')){
    exit('you do not have a config file');
}

//session are always turn on 
if(!isset($_SESSION)){
    session_start();
}

// db connection
include_once('classess/db.php');
include_once('functions.php');

$conn = DB::getConnection();