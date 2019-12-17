<?php 
    include_once('../Database/Queries/user_queries.php');
    include_once('input.php');

    $username = validateInput($_POST['Username']);
    $password = validateInput($_POST['Password']);
    $confpassword = validateInput($_POST['ConfPassword']);
    $name = validateInput($_POST['Name']);
    $birthdate = validateInput($_POST['BirthDay']);

    $msg = createUser($username,$password,$confpassword,$name,$birthdate);

    if($msg == "User sucessfully created"){
        $_SESSION['Username'] = $username;
        header('Location: ../index.php');
    }
    else {
        $_POST['RegError'] = $msg;
        header('Location: ../pages/register_user.php?error='.$msg);
    }
   	die();
?>