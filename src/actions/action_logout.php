<?php 
    include_once('../Database/connection.php');

    session_destroy();

    session_start();

    header('Location: ../index.php');
?>