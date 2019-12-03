<?php

    include_once('../Database/Queries/user_queries.php');
    
    $name = $_GET['name'];
    $username = $_GET['newUsername'];
    $description = $_GET['description'];
    $date_of_birth = $_GET['date_of_birth'];

    if ($name != '' && $username != '' && $description != '' && $date_of_birth != '') {
        editProfile($_SESSION['Username'], $name, $username, $date_of_birth, $description);
        header('Location: ../pages/profile.php');
    }
    else {
        echo $name;
        echo $username;
        echo $description;
        echo $date_of_birth;
    }
    die();
?>