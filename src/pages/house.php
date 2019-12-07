<?php 
    include('../Template/common/header.php');
    include('../Template/common/footer.php');
    include('../Template/tpl_house.php');
    include('../Template/tpl_picture_slider.php');

    $house_id = $_GET['id_house'];

    if (isset($_SESSION['Username'])) {
        draw_header_profile();
    }
    else{
        draw_header_index();
    }

    getHouseInfo($house_id);
    pic_slider($house_id);

    
    draw_footer();
?>
