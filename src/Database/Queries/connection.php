<?php
	
	$dbh = new PDO('sqlite:../Database/housedb.db');

	$dbh->query('PRAGMA foreign_keys = ON');
	$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); 
	$dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

?>	
