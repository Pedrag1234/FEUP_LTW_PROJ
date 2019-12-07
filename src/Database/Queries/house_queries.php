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

	function getHousePics($id){
		global $dbh;

		$stmt = $dbh->prepare('SELECT * FROM photo WHERE id_house = ?');
		$stmt->execute(array($id));
		return $stmt->fetchAll();
	}
	
	function createHouse($title,$rent,$location,$desc,$area,$maxg,$rooms,$baths,$username){
		
		global $dbh;

		$stmt = $dbh->prepare('INSERT INTO house VALUES(null,?,?,?,?,0,?,?,?,?,?)');
		$stmt->execute(array($rent,$location,$title,$maxg,$desc,$area,$rooms,$baths,$username));

	}

	function addHousePhotos($house_id,$photo){
		global $dbh;

		$house = getHouse($house_id);

		if (empty($house)) {
			return;
		}
		else{
			$stmt = $dbh->prepare('UPDATE photo SET photo = ? WHERE id_house = ?');
			$stmt->execute(array($house_id,$photo));
			return;
		}
	}

?>