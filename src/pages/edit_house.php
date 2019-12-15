<?php 
include('../Template/tpl_edit_house.php');
include('../Template/common/header.php');
include('../Template/common/footer.php');

$house_id = $_GET['id_house'];

draw_header_profile();

edit_House($house_id);

draw_footer();

?>