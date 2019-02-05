<?php
session_start();
    require "connection.php";


    $login = $_POST['login'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $login = htmlspecialchars($login);
    $email = htmlspecialchars($email);
    $password = htmlspecialchars($password);


    $email_count = R::count('users', "email = ?", array($email));
    $login_count = R::count('users', "login = ?", array($login));


    if($login_count == 0 && $email_count == 0) {

        $user = R::dispense('users');
        $user->login = $login;
        $user->email = $email;
        $user->password = password_hash($password, PASSWORD_DEFAULT);

        R::store($user);
        echo "0";
    }
    if($login_count > 0) {
        echo "1";
    }
    if($login_count == 0 && $email_count > 0) {
        echo "2";
    }
?>