<?php

if (!defined('__CONFIG__')) {
    exit('you do not have a config file');
}

class user
{
    private $conn;
    public $user_id;
    public $reg_date;
    public $email;

    public function __construct(int $user_id)
    {
        $this->conn = DB::getConnection();
        $user_id = $user_id;
        $user = $this->conn->prepare('SELECT id,email,password,reg_date FROM users WHERE id =:user_id LIMIT  1');
        $user->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $user->execute();

        if ($user->rowCount() == 1) {
            $user = $user->fetch(PDO::FETCH_OBJ);
            $this->email    = $user->email;
            $this->user_id  = $user->id;
            $this->reg_date = $user->reg_date;
        } else {
            header('location:logout.php');exit;
        }
    }
    public static function find($email, $return_assoc = false)
    {

        $conn = DB::getConnection();

        $findUser = $conn->prepare("SELECT id,password FROM users WHERE email = :email LIMIT 1");
        $findUser->bindParam(':email', $email, PDO::PARAM_STR);
        $findUser->execute();

        if ($return_assoc) {
            return $findUser->fetch(PDO::FETCH_ASSOC);
        }
        $user_found = (bool) $findUser->rowCount();

        return $user_found;
    }
}
