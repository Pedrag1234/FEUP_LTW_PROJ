<?php

include_once('../Template/common/header.php');
include_once('../Template/common/footer.php');
include_once('../Template/tpl_home.php');

if(isset($_POST['Username'])){
	draw_header_user();
}else{
	draw_header_index();
}

displayTopHouses();
draw_footer();

?>