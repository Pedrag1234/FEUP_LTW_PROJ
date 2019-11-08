<?
	include_once('Database/connection.php');

	function getUser($username){
		global $dbh;

		$stmt = $dbh->prepare('SELECT * FROM user WHERE username = ?');
		$stmt->execute();
		return $stmt->fetch();
	}

	function getUserInfo($username){//to be removed
		global $dbh;

		$stmt = $dbh->prepare('SELECT * FROM user_info WHERE id_user = ?');
		$stmt->execute();
		return $stmt->fetch();
	}

	function getUserHouses($username){
		global $dbh;

		$stmt = $dbh->prepare('SELECT * FROM house WHERE id_owner = ?');
		$stmt->execute();
		return $stmt->fetchAll();
	}

?>