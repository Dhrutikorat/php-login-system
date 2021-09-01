<?php

if (!defined('__CONFIG__')) {
    exit('you do not have a config file');
}

class page
{
    // user force login if user not log in
    static function forceLogin()
    {
        if (isset($_SESSION['user_id'])) {
            // if login user here
        } else {
            // if user not logged in
            header('location:login.php');
            exit;
        }
    }

    static function forceDashboard()
    {
        if (isset($_SESSION['user_id'])) {
            // if user login and not access the login page again 
            header('location:dashboard.php');
            exit;
        } else {
            // if user not logged in
        }
    }
}
