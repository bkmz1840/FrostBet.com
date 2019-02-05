<?php
session_start();
require "rb.php";
R::setup( 'mysql:host=localhost;dbname=frostbets', 'root', '' );

$login = $_POST['login'];

$password = $_POST['password'];

$login = htmlspecialchars($login);
$password = htmlspecialchars($password);


$user = R::findOne('users', 'login=?', array($login));

if($user){
    if(password_verify($password, $user->password)){
        $_SESSION['logged_user'] = $user;
        echo "0";
    }
    else
        echo "2";
}
else 
    echo "1";


?>