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

		$stmt = $dbh->prepare('INSERT INTO house VALUES(null,?,?,?,?,1,?,?,?,?,?)');
		$stmt->execute(array($rent,$location,$title,$maxg,$desc,$area,$rooms,$baths,$username));
		
		$result = $dbh->query('SELECT last_insert_rowid() as last_insert_rowid')->fetch();
    	return $result['last_insert_rowid'];
	}

	function addHousePhotos($house_id,$photo){
		global $dbh;

		$house = getHouse($house_id);

		if (empty($house)) {
			return;
		}
		else{
			$stmt = $dbh->prepare('INSERT INTO photo VALUES(null,?,?)');
			$stmt->execute(array($photo,$house_id));
			return;
		}
	}

	function updateHouse($title,$rent,$location,$desc,$area,$maxg,$rooms,$baths,$id){
		
		global $dbh;

		$stmt = $dbh->prepare('UPDATE house SET rent=?, location=?, title=?, max_guests=?, description=?, area=?, quartos=?, casas_de_banho=? WHERE id_house=?');
		$stmt->execute(array($rent,$location,$title,$maxg,$desc,$area,$rooms,$baths,$id));
	}

	function getHouseAvailability($house_id){
		global $dbh;

		$stmt = $dbh->prepare('SELECT * FROM availability WHERE id_house = ?');
		$stmt->execute(array($house_id));
		return $stmt->fetchAll();
	}

	function getHouseNumberPeople($house_id){
		global $dbh;

		$stmt = $dbh->prepare('SELECT max_guests FROM house WHERE id_house = ?');
		$stmt->execute(array($house_id));
		return $stmt->fetchAll();
	}

?>