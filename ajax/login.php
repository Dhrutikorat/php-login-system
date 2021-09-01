<?php
    //define constant 
    define('__CONFIG__', true);


    // require config file
    require_once('../inc/config.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        // header('content-type:application/json');
        
        $return = [];

        $email = $_POST['email'];
        $password = $_POST['password'];

        $findUser = user::find($email,true);
        
        if($findUser){
            $user_id = (int)$findUser['id'];
            $hash = $findUser['password'];

            if(password_verify($password,$hash)){
                $return['redirect'] = 'dashboard.php';
                $_SESSION['user_id'] = $user_id;
            }else{
                $return['error'] = 'Invalid email/Password combination';
            }
        }else{
            $return['error'] = 'You do not have an account.<a href="register.php">Register Now</a>';
        }   

        echo json_encode($return, JSON_PRETTY_PRINT);exit;
    } else {
        exit('Invalid URL');
    }   
