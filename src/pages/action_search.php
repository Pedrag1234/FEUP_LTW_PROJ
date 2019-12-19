<?php

include_once('../Database/Queries/house_queries.php');
include_once('../actions/input.php');

include_once('../Template/common/header.php');
include_once('../Template/common/footer.php');
include_once('../Template/tpl_home.php');


draw_header_index();


$title = validateInput($_POST['houseName']);
$local = validateInput($_POST['localizacao']);
$numeroHospedes = validateInput($_POST['numeroHospedes']);
$search_result = searchHouses($title, $local, $numeroHospedes);
if (empty($search_result)) { ?>
    <h1>No houses found</h1>
<?php }
else {
    ?><div id="houses"><?php
    displayHouses($search_result);
    ?></div><?php
}


//header('Location: ../pages/search_result.php');


draw_margin();
draw_footer();

?>


