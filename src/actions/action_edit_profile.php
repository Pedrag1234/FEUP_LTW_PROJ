<?php

    include_once('../Database/Queries/user_queries.php');

    if ($_GET['description'] != "")
        editDescription($_SESSION['Username'], $_GET['description']);

    header('Location: ../index.php');
    die();
?>