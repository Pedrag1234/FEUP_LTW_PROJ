<?php
	include_once('../Database/connection.php');
	include_once('../Template/tpl_messages.php');

	function getUserMessages($username){
        global $dbh;

        $stmt = $dbh->prepare('SELECT * FROM house WHERE id_receiver = ?');
        $stmt->execute();
        return $stmt->fetchAll(); 
    }

    function getUserMessageChats($username){
        global $dbh;

        $stmt = $dbh->prepare('SELECT distinct * from user 
        						where username in(
        										SELECT distinct id_sender FROM message WHERE id_receiver = ?)');
        $stmt->execute();
        return $stmt->fetchAll(); 
    }

    function newChat($sender, $receiver){
    	

    	drawChatRoom($sender, $receiver);
    }

?>