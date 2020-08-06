<?php
require_once "../configdb/db_connector.php";

class User
{
    public $username;
    public $email;
    public $phone;
    public $password;
    public $gender;
    public $isAdmin;

    function register(){
        $base = connect_to_db();
        $requette = "INSERT INTO users VALUES (null,'$this->name','$this->email','$this->phone','$this->password','$this->gender', ".$this->isAdmin.")";
    
        $insertedRow = $base->exec($requette);

        if ($insertedRow == 1) {
      
            header('location:../html/login.php?register=true');
        }else{
            header('location:../html/home.php');
            echo "SQL Error !";
        
        }
    }

    function login()
    {
        $base = connect_to_db();
        $requette = "SELECT * from users where email='$this->email' and password='$this->password'";
        $data = $base->query($requette);
        if ($data->rowCount() == 1) {
            session_start();
            $user = $data->fetchObject();
            $_SESSION['email'] = $user->email;
            $_SESSION['is_admin'] = $user->is_admin;
            if ($user->is_admin)
                header('location:../admins/index.php');
            else
                header('location:../html/home.php');
        } else {
            header('location:../html/login.php?error=true');
        }

    }
}
