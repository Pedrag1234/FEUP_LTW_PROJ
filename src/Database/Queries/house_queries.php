<?php
	include_once('../Database/connection.php');

	function getAllHouses(){
		global $dbh;

		$stmt = $dbh->prepare('SELECT * FROM house');
		$stmt->execute();
		
		return $stmt->fetchAll();
	}

	function getHouse($id){
		global $dbh;

		$stmt = $dbh->prepare('SELECT * FROM house WHERE id_house = ?');
		$stmt->execute(array($id));
		return $stmt->fetch();
	}
	
	function getTopHouses(){
		global $dbh;

		$stmt = $dbh->prepare('SELECT * FROM house ORDER BY classificacao DESC LIMIT 5');
		$stmt->execute();
		return $stmt->fetchAll();
	}

	function getHousesByUser($username){
		global $dbh;

		$stmt = $dbh->prepare('SELECT * FROM house WHERE id_owner = ?');
		$stmt->execute(array($username));
		return $stmt->fetchAll();
	}


?>