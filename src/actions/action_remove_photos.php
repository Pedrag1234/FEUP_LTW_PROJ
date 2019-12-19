<?php

include_once('../Database/Queries/house_queries.php');
header("Content-Type: text/plain");


$photosrm = $_POST['photos2del'];


foreach($photosrm as $pic){
    deletePhoto($pic);
}


header('Location: ../pages/user_houses.php');
die();

?>
