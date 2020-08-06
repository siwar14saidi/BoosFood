<?php
session_start();

require_once "../models/user.php";

if (isset($_GET['event']) && !empty($_GET['event'])) {
    $event = $_GET['event'];

    if ($event == 'register') {
        # code Register
        $user = new User();
        $user->name = $_POST['username'];
        $user->email = $_POST['email'];
        $user->phone = $_POST['phone'];
        $user->password = md5($_POST['password']);
        $user->gender = $_POST['gender'];
        $user->isAdmin = 0;
        $user->register();
    } else if ($event == 'login') {
        $user = new User();
        $user->email = strtolower($_POST['email']);
        $user->password = md5($_POST['password']);
        $user->login();
    } else if ($event == 'add_admin') {
        $user = new User();
        $user->email = isset($_POST["email"]) ? $_POST["email"] : "admin@admin.com";
        $user->password = isset($_POST["password"]) ? md5($_POST["password"]) : md5("secret");
        $user->name = isset($_POST["name"]) ? $_POST["name"] :  "Super Admin";
        $user->gender = isset($_POST["gender"]) ? $_POST["gender"] :  "homme";
        $user->phone = isset($_POST["phone"]) ?  $_POST["phone"] :  "95877950";
        $user->isAdmin = 1;
        $user->register();
    } else if ($event == 'logout') {
        session_start();

        session_unset();

        session_destroy();

        header('location:../html/index.html?logout=true');
    }
    else{
        echo "You are not allowed !";
    }
}
else{
    echo "You are not allowed !";
}
?>