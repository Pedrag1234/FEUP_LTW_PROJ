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

	function createReservation($n_guests, $payment, $username, $id_house){
		
		global $dbh;

		$stmt = $dbh->prepare('INSERT INTO reservation VALUES(null,?,?,?,?)');
		$stmt->execute(array($n_guests, $payment, $username, $id_house));

		$result = $dbh->query('SELECT last_insert_rowid() as last_insert_rowid')->fetch();
    	return $result['last_insert_rowid'];
	}

	function createDateReservation($start_date, $end_date, $id_reservation, $id_house){
		
		global $dbh;

		$stmt = $dbh->prepare('INSERT INTO date_reservation VALUES(?,?,?,?)');
		$stmt->execute(array($start_date, $end_date, $id_reservation, $id_house));
	}

	function createAvailability($start_date, $end_date, $id_house){
		global $dbh;

		$stmt = $dbh->prepare('INSERT INTO availability VALUES(null,?,?,?)');
		$stmt->execute(array($start_date, $end_date, $id_house));
	}

	function deleteReservation($id_reservation){
		global $dbh;

		$stmt = $dbh->prepare('DELETE FROM reservation WHERE id_reservation = ?');
		$stmt->execute(array($id_reservation));
	}

	function deleteDateReservation($id_reservation, $id_house){
		global $dbh;

		$stmt = $dbh->prepare('DELETE FROM date_reservation WHERE id_reservation = ? AND id_house = ?');
		$stmt->execute(array($id_reservation, $id_house));
	}

	function deleteAvailability($id_house, $start_date, $end_date){
		global $dbh;

		$stmt = $dbh->prepare('DELETE FROM availability WHERE id_house = ? AND start_date = ? AND end_date = ?');
		$stmt->execute(array($id_house, $start_date, $end_date));
	}

	function getReservationofHouse($id_house,$id_user){
		global $dbh;

		$stmt = $dbh->prepare('SELECT * FROM reservation WHERE id_user = ? AND id_house = ?');
		$stmt->execute(array($id_user,$id_house));
		return $stmt->fetchAll();
	}

?>