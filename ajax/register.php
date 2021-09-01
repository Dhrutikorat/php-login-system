<?php
    //define constant 
    define('__CONFIG__', true);


    // require config file
    require_once('../inc/config.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        // header('content-type:application/json');
        
        $return = [];

        $email = $_POST['email'];

        $findUser = user::find($email);
        
        if($findUser){
            $return['error'] = 'You already have an account';
        }else{
            $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
            $addUser = $conn->prepare("INSERT INTO users (email,password)VALUES(:email,:password)");
            $addUser->bindParam(':email',$email,PDO::PARAM_STR);
            $addUser->bindParam(':password',$password,PDO::PARAM_STR);
            $addUser->execute();
            $user_id = $conn->lastInsertId();
            $_SESSION['user_id'] = (int) $user_id;

            $return['redirect'] = 'dashboard.php';
        }   

        echo json_encode($return, JSON_PRETTY_PRINT);exit;
    } else {
        exit('Invalid URL');
    }   
