<?php 
    include_once('../Database/connection.php');

    function getReviews($id_house){
        global $dbh;

        $stmt = $dbh->prepare('SELECT * FROM review WHERE id_house = ?');
		$stmt->execute(array($id_house));
		return $stmt->fetchAll();
    }





?>