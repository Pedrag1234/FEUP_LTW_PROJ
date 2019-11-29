<?php 
    include_once('../Database/Queries/user_queries.php');

    $username = trim(strip_tags($_POST['Username']));
    $password = $_POST['Password'];

    verifyUser($username, $password);
    
    header('Location: ../index.php');
   	die();
    
?>