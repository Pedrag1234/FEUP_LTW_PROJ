<?php

    include_once('../Database/Queries/user_queries.php');

    editDescription($_SESSION['Username'], $_GET['description']);

    header('Location: ../index.php');
    die();
?>