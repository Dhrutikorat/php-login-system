<?php
//if there is no constant define here
if(!defined('__CONFIG__')){
    exit('you do not have a config file');
}

// db connection
include_once('classess/db.php');

$conn = DB::getConnection();