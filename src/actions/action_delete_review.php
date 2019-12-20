<?php
include_once('../Database/Queries/reviews_queries.php');

$house_id = $_POST['house_id'];
$review = $_POST['review_id'];

deleteReview($review);

$newpage = "../pages/house.php?id_house=".$house_id;

header('Location: '.$newpage);
die();

?>