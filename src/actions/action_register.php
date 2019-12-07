<?php 
    include_once('../Database/Queries/user_queries.php');

    $username = trim(strip_tags($_POST['Username']));
    $password = $_POST['Password'];
    $confpassword = $_POST['ConfPassword'];
    $name = $_POST['Name'];
    $birthdate = $_POST['BirthDay'];

    $msg = createUser($username,$password,$confpassword,$name,$birthdate);

    $_POST['RegError'] = $msg;
    if($msg == "User sucessfully created"){
        $_SESSION['Username'] = $username;
        header('Location: ../index.php');
    }
    else {
        $_POST['RegError'] = $msg;
        header('Location: ../pages/register_user.php?RegError='.$msg);
    }
   	die();
?>