<?php 
    include_once('../Database/Queries/user_queries.php');

    $username = trim(strip_tags($_POST['Username']));
    $password = $_POST['Password'];
    $confpassword = $_POST['ConfPassword'];
    $name = $_POST['Name'];
    $birthdate = $_POST['BirthDay'];

    createUser($username,$password,$confpassword,$name,$birthdate);

    $_SESSION['Username'] = $username;

    header('Location: ../index.php');
   	die();
?>