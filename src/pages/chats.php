<?php 
 	include_once('../Template/common/header.php');
	include_once('../Template/common/footer.php');
	include_once('../Template/tpl_messages.php');

	draw_head_chat();

	draw_header_index();

	$user = $_SESSION['Username'];
	$receiver = $_POST['Receiver'];

	drawChatRoom($user, $receiver);

	draw_footer();
	?>