<?php 
    include_once('../Database/Queries/message_queries.php');

    $sender = $_SESSION['Username'];
    $receiver = $_POST['Receiver'];
    
    // $msg = $_POST['messageToSend'];

    newChat($sender,$receiver);

    //header('Location: ../pages/messages.php');
   	//die();
?>