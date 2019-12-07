<?php 
    include_once('../Database/Queries/user_queries.php');

    $username = trim(strip_tags($_POST['Username']));
    $password = $_POST['Password'];

    if(verifyUser($username, $password)){
    	$_SESSION['Username'] = $username;
    	header('Location: ../index.php');
   		die();
    }
    else
    	header('Location: ../pages/login.php?error=Wrong username or password')
    

?>