<?php 
	include_once('../Template/common/header.php');
	include_once('../Template/common/footer.php');
	include_once('../Template/tpl_messages.php');

	draw_header_profile();

	displayUserChats();

	draw_footer();
?>