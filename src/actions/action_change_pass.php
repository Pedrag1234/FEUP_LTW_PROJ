<?php

    include_once('../Database/Queries/user_queries.php');

    if ($_POST['newPassword'] != ""){
        if (!isset($_SESSION['csrf'])) echo 'Token is not set';
        else if (!isset($_POST['csrf'])) echo 'Token (post) is not set';
        else if ($_SESSION['csrf'] == $_POST['csrf']) {
            $result = changePassword($_SESSION['Username'], $_POST['oldPassword'], $_POST['newPassword'], $_POST['confPassword']);
            if ($result == 'ok')
                header('Location: ../pages/user_profile.php');
            else header('Location: ../pages/change_pass.php?error='.$result);
        }
        else echo 'Wrong session token '.$_SESSION['csrf'].' AAAAAA '.$_POST['csrf'].' AAAA';

    }
    else header("Location: ../pages/change_pass.php?error=New password can't be empty");
    die();
?>