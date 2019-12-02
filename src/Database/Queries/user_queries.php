<?php
	include_once('../Database/connection.php');

	function verifyUser($username,$password){
		global $dbh;

		$stmt = $dbh->prepare('SELECT * FROM user WHERE username = ?');
		$stmt->execute(array($username));

		$user = $stmt->fetch();

		return ($user != false && password_verify($password,$user['password']));
	}


	function createUser($username,$password,$confpassword,$name,$birthdate){
		global $dbh;

		if ($password != $confpassword) {
			return "Pswd doesn't match";
		}
		else{
			$temp = getUser($username);
			if ($temp == false) {
				$options = ['cost' => 12];
				$hash = password_hash($password,PASSWORD_DEFAULT, $options);

				$stmt = $dbh->prepare('INSERT INTO user VALUES (?,?,?,0,?,"",LOAD_FILE("../css/house.jpg")');
				$stmt->execute(array($username,$hash,$name,$birthdate));

				return "User sucessfully created";
			}
			else{
				return "username already exists";
			}
		}
	}

	function getUser($username){
		global $dbh;

		$stmt = $dbh->prepare('SELECT * FROM user WHERE username = ?');
		$stmt->execute(array($username));
		return $stmt->fetch();
	}

	function getUserHouses($username){
		global $dbh;

		$stmt = $dbh->prepare('SELECT * FROM house WHERE id_owner = ?');
		$stmt->execute();
		return $stmt->fetchAll();
	}

?>