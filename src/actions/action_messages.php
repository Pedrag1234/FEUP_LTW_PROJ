<?php 
    include_once('../Database/Queries/user_queries.php');

    $usersMessaged = getUserMessageChats($_SESSION['Username']);
    
    displayUserChats($usersMessaged);	

    /*for($usersMessaged as $user){
		getUserMessagesSent($user);
		getUserMessagesReceived($user);
    }*/

?>