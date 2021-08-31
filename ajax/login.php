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

        $findUser = $conn->prepare("SELECT id,password FROM users WHERE email = :email LIMIT 1");
        $findUser -> bindParam(':email',$email,PDO::PARAM_STR);
        $findUser->execute();
        
        if($findUser->rowCount() == 1){
            $user = $findUser->fetch(PDO::FETCH_ASSOC);
            $user_id = (int)$user['id'];
            $hash = $user['password'];

            if(password_verify($password,$hash)){
                $return['redirect'] = 'dashboard.php';
                $_SESSION['user_id'] = $user_id;
            }else{
                $return['error'] = 'Invalid email/Password combination';
            }
        }else{
            $return['error'] = 'You do not hsve an account.<a href="register.php">Register Now</a>';
        }   

        echo json_encode($return, JSON_PRETTY_PRINT);exit;
    } else {
        exit('Invalid URL');
    }   
