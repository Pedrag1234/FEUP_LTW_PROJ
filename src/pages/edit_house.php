<?php 

include('../Template/common/header.php');
include('../Template/common/footer.php');
include('../Template/tpl_edit_house.php');

print_r($_SESSION['Username']);

draw_header_profile();

edit_House();

draw_footer();

?>