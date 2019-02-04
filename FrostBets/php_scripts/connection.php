<?
    require "rb.php";
    R::setup('mysql:host=localhost;dbname=frostbets', 'root', '');
    session_start();
    // adm_status : 1000 - user; 1006 - admin; 44 - banned
?>