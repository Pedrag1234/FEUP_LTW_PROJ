<?
	include_once('../Database/connection.php');

	function getMessages($user1,$user2){
		global $dbh;

		$stmt = $dbh->prepare('SELECT * FROM house WHERE id_sender = ? AND id_receiver = ?');
		$stmt->execute();
		return $stmt->fetchAll();
	}

	//TODO: Create a query that selects a the most recent message

	
?>