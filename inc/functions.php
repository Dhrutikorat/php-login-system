<?php
// user force login if user not log in
function forceLogin()
{
    if (isset($_SESSION['user_id'])) {
        // if login user here
    } else {
        // if user not logged in
        header('location:login.php');exit;
    }
}

function forceDashboard(){
    if (isset($_SESSION['user_id'])) {
        // if user login and not access the login page again 
        header('location:dashboard.php');exit;
    } else {
        // if user not logged in
    }
}