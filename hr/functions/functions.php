<?php

function clean($string){
    return htmlentities($string);
}

function redirect($location){
    header("Location: {$location}"); //for redirecting pages
}

function validation_errors($error_message){

    //for displaying alerts
    $alert_error_message = "
    <div class='alert alert-danger alert-dismissible' role='alert'>
        <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
        <strong>Warning!</strong>
        {$error_message}
    </div>
    ";
    return $alert_error_message;
}

function validate_user_login(){
    $errors = [];

    if(!isset($_POST['username']) && !isset($_POST['password'])){
        return false;
    }

    $username          = clean($_POST['username']);
    $password          = clean($_POST['password']);
    $remember          = clean($_POST['remember']);

    if(empty($username)){
        $errors[] = "Username field cannot be empty.";
    }

    if(empty($password)){
        $errors[] = "Password field cannot be empty.";
    }

    if(!empty($errors)){
        foreach($errors as $error){
            echo validation_errors($error);
        }
    }
    else{
        if(login_user($username, $password, $remember)){
            redirect("index.php");
        }
        else{
            echo validation_errors("Your credentials are not correct");
        }
    }
}

function login_user($username, $password, $remember){
    $sql = "SELECT password, id FROM users WHERE username = '".escape($username)."' AND active = 1";
    $result = query($sql);
    if(row_count($result) == 1){
        $row = fetch_array($result);

        $db_password = $row['password'];

        if(md5($password) == $db_password){

            if($remember == "on"){
                setcookie('username', $username, time() + 1200);
            }

            $_SESSION['username'] = $username;

            return true;
        }
    }

    return false;
}

function logged_in(){
    if(isset($_SESSION['username']) || isset($_COOKIE['username'])){
        return true;
    }
    else{
        return false;
    }
}