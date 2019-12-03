<?php

    include_once('../Database/Queries/user_queries.php');

    if ($_GET['newPassword'] != ""){
        if (changePassword($_SESSION['Username'], $_GET['oldPassword'], $_GET['newPassword'], $_GET['confPassword']))
            header('Location: ../index.php');
        else header('Location: ../pages/change_pass.php');
    }
    else header('Location: ../pages/change_pass.php');
    die();
?>