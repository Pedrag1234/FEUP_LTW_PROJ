<?
	include_once('Database/connection.php');

	function getUser($username){
		global $dbh;

		$stmt = $dbh->prepare('SELECT * FROM user WHERE username = ?');
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