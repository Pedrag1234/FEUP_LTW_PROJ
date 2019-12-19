<?php
  // Current time
  $timestamp = time();

  // Get last_id
  $last_id = $_GET['last_id'];

  // Database connection
  $dbh = new PDO('sqlite:chat.db');
  $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  if (isset($_SESSION['Username']) && isset($_GET['text']) && isset($_GET['receiver'])) {
    // GET username and text
    $username = $_SESSION['Username'];
    $receiver = $_GET['receiver'];
    $text = $_GET['text'];
    // Insert Message
    $stmt = $dbh->prepare("INSERT INTO message VALUES (null, ?, ?, ?,?)");
    $stmt->execute(array($timestamp, $text, $username, $receiver));
  }

  // Retrieve new messages
  $stmt = $dbh->prepare("SELECT * FROM message WHERE id > ? AND id_sender = ? AND id_receiver = ? ORDER BY date DESC LIMIT 10");
  $stmt->execute(array($last_id, $username, $receiver));
  $messages = $stmt->fetchAll();

  // In order to get the most recent messages we have to reverse twice
  $messages = array_reverse($messages);

  // Add a time field to each message
  foreach ($messages as $index => $message) {
    $time = date('h:i:s', $message['date']);
    $messages[$index]['time'] = $time;
  }

  // JSON encode
  echo json_encode($messages);
?>
