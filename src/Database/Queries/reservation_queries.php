<?php
	include_once('../Database/connection.php');

	function getAllReservations(){
		global $dbh;

		$stmt = $dbh->prepare('SELECT * FROM house');
		$stmt->execute();
		
		return $stmt->fetchAll();
	}

	function getReservation($id){
		global $dbh;

		$stmt = $dbh->prepare('SELECT * FROM reservation WHERE id_reservation = ?');
		$stmt->execute(array($id));
		return $stmt->fetch();
	}

	function getReservationDates($id_reservation, $id_house){
		global $dbh;

		$stmt = $dbh->prepare('SELECT * FROM date_reservation WHERE id_reservation = ? AND id_house = ?');
		$stmt->execute(array($id_reservation, $id_house));
		return $stmt->fetch();
	}

	function getReservationsByUser($username){
		global $dbh;

		$stmt = $dbh->prepare('SELECT * FROM reservation WHERE id_user = ?');
		$stmt->execute(array($username));
		return $stmt->fetchAll();
	}

	function createReservation($title,$rent,$location,$desc,$area,$maxg,$rooms,$baths,$username){
		
		global $dbh;

		$stmt = $dbh->prepare('INSERT INTO house VALUES(null,?,?,?,?,0,?,?,?,?,?)');
		$stmt->execute(array($rent,$location,$title,$maxg,$desc,$area,$rooms,$baths,$username));

	}
?>