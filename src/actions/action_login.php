<?php 
    include_once('../Database/Queries/user_queries.php');
    include_once('input.php');

    $username = validateInput($_POST['Username']);
    $password = validateInput($_POST['Password']);
    $ip_address = $_SERVER['REMOTE_ADDR'];
    if ( userBlocked($username, $ip_address)){            
        header('Location: ../pages/login.php?error=You tried too many times, wait 10 minutes');
    }
    else if(verifyUser($username, $password)){
        $_SESSION['Username'] = $username;
        if (!isset($_SESSION['csrf'])) {
            $_SESSION['csrf'] = bin2hex(openssl_random_pseudo_bytes(32));
        }
    	header('Location: ../index.php');
   		die();
    }
    else if (getUser($username)==false) {
        header('Location: ../pages/login.php?error=This username is not registered');
    }
    else {
        $number = register_wrong_login($username, $_SERVER['REMOTE_ADDR']);
        header('Location: ../pages/login.php?error=Wrong username or password '.$number.'/3');
    }

?>