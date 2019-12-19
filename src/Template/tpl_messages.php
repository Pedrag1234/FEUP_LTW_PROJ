/*
<?php

include_once('../Database/Queries/message_queries.php');

function displayMessage($Message){
    if($Message['id_receiver'] == $_SESSION['Username']){ ?>
        <div class="messageContainer">
          <p> <?php echo $Message['msg'] ?> </p>
          <p> <?php echo $Message['timestamp'] ?> </p>
      </div>
  <?php } ?>
  <div id="message">
    <h1><?php echo $Message['id_sender']; ?></h1>
    <a><?php echo $Message['description']; ?></a>
    <a><?php echo $Message['location']; ?></a>
</div>
<?php

}

function drawChatRoom($user, $receiver){ ?>

    <div id="chat"></div>

    <form>

      <input type="text" name="message" placeholder="message">
      <input type="submit" value="Send">
  </form>

  <?php
}


function displayUserChats(){ ?>

    <section>
        <div>
            <a href="../pages/toWhom.php">New Message</a>
        </div>

        <?php
        $usersMessaged = getUserMessageChats($_SESSION['Username']);

        foreach($usersMessaged as $uMessaged){ ?>
            <div class="chatContainer">
              <a href="../pages/chats.php"> <?php echo $uMessaged['Username'] ?> </a>
          </div>
      <?php } ?>

  </section>
  <?php
}
?>

<?php
  /*// Current time
  $timestamp = time();

  // Get last_id
  $last_id = $_GET['last_id'];

  // Database connection
  $dbh = new PDO('sqlite:chat.db');
  $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
  $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  if (isset($_SESSION['Username'])) {
    // GET username and text
    $username = $_SESSION['Username'];
    $text = $_GET['text'];
    // Insert Message
    $stmt = $dbh->prepare("INSERT INTO chat VALUES (null, ?, ?, ?)");
    $stmt->execute(array($timestamp, $username, $text));
  }

  // Retrieve new messages
  $stmt = $dbh->prepare("SELECT * FROM chat WHERE id > ? ORDER BY date DESC LIMIT 10");
  $stmt->execute(array($last_id));
  $messages = $stmt->fetchAll();

  // In order to get the most recent messages we have to reverse twice
  $messages = array_reverse($messages);

  // Add a time field to each message
  foreach ($messages as $index => $message) {
    $time = date('h:i:s', $message['date']);
    $messages[$index]['time'] = $time;
  }

  // JSON encode
  echo json_encode($messages);*/
  ?>


