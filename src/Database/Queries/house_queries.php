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
		$stmt->execute();
		return $stmt->fetch();
	}
	
	function getTopHouses(){
		global $dbh;

		$stmt = $dbh->prepare('SELECT * FROM house ORDER BY classificacao WHERE id_house = ? LIMIT 2');
		$stmt->execute();
		return $stmt->fetchAll();
	}


?>