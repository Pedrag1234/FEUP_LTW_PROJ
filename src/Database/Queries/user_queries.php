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
		if ($username == "")
			return "Choose a username, please";
		else if (strlen($password) < 8)
			return "The password must have at least 8 digits";
		else if ($name == "")
			return "It's necessary to inform your name";
		else if ($birthdate == "")
			return "It's necessary to inform your date of birth";
		
		global $dbh;
		$temp = getUser($username);
		if ($temp != false)
			return "Username already exists";
		else if ($password != $confpassword)
			return "Passwords don't match";
		else{
			$options = ['cost' => 12];
			$hash = password_hash($password,PASSWORD_DEFAULT, $options);
			$img = file_get_contents("../images/empty_profile_pic.jpg");
			$stmt = $dbh->prepare('INSERT INTO user VALUES (?,?,?,0,?,"",?)');
			$stmt->execute(array($username,$hash,$name,$birthdate, $img));

			return "User sucessfully created";
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

	function editDescription($username, $newDescription){
		
		global $dbh;

		$stmt = $dbh->prepare('UPDATE user SET about=? WHERE username = ?');
		$stmt->execute(array($newDescription, $username));
		return;

	}

	function changePassword($username, $oldPassword, $newPassword, $confPassword){
		
		global $dbh;
		if (!verifyUser($username,$oldPassword)){
			return false;
		}
		else if ($newPassword != $confPassword) {
			return false;
		}
		else{
				$options = ['cost' => 12];
				$hash = password_hash($newPassword,PASSWORD_DEFAULT, $options);
				$stmt = $dbh->prepare('UPDATE user SET password=? WHERE username = ?');
				$stmt->execute(array($hash, $username));

				return true;

		}

	}

	function editBirthDate($username, $date){
		
		global $dbh;

		$stmt = $dbh->prepare('UPDATE user SET date_of_birth=? WHERE username = ?');
		$stmt->execute(array($date, $username));
		return;
	}


	function editProfile($username, $name, $newUsername, $date_of_birth, $presentation){
		
		global $dbh;

		$stmt = $dbh->prepare('UPDATE user SET name=?, username=?, date_of_birth=?, about=? WHERE username = ?');
		$stmt->execute(array($name, $newUsername, $date_of_birth, $presentation, $username));
		$_SESSION['Username'] = $newUsername;

		return;
	}
	
	function editProfilePicture($username, $photo){
		
		global $dbh;

		$stmt = $dbh->prepare('UPDATE user SET photo=? WHERE username = ?');
		$stmt->execute(array($photo, $username));
		return;
	}

?>