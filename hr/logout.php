<?php
include("functions/init.php");

session_destroy();

if(isset($_COOKIE['username'])){
    unset($_COOKIE['username']);
    setcookie('username', '', time() - 1200);
}

redirect("../index.php");