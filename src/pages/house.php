<?php 
    include('../Template/common/header.php');
    include('../Template/common/footer.php');
    include('../Template/tpl_house.php');

    $house_id = $_GET['house_id'];

    if (isset($_SESSION['Username'])) {
        draw_header_profile();
    }
    else{
        draw_header_index();
    }

    getHouseInfo($house_id);
    
    draw_footer();

?>