<?php

    include_once('../Database/Queries/user_queries.php');
    include_once('input.php');
    
    $name = validateInput($_POST['name']);
    $username = validateInput($_POST['newUsername']);
    $description = validateInput($_POST['description']);
    $date_of_birth = validateInput($_POST['date_of_birth']);
    
    if ($name != '' && $username != '' && $description != '' && $date_of_birth != '') {
        if ($_SESSION['csrf'] == $_POST['csrf']) {
            editProfile($_SESSION['Username'], $name, $username, $date_of_birth, $description);
            header('Location: ../pages/user_profile.php');
        }
        else echo 'Wrong session token';
    }
    else {
        echo $name;
        echo $username;
        echo $description;
        echo $date_of_birth;
        header('Location: ../pages/edit_profile.php?error="Preencha todos os campos"');
    }
    die();
?>