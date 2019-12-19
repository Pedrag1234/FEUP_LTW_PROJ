<?php

include_once('../Database/Queries/house_queries.php');
header("Content-Type: text/plain");

if ($_SESSION['csrf'] != $_POST['csrf']) {
    editProfile($_SESSION['Username'], $name, $username, $date_of_birth, $description);
    echo "Wrong token";
    die();
}

$photosrm = $_POST['photos2del'];


foreach($photosrm as $pic){
    deletePhoto($pic);
}


header('Location: ../pages/user_houses.php');
die();

?>
