<?php 
    include('../Template/common/header.php');
    include('../Template/common/footer.php');
    include('../Template/tpl_house.php');
    include('../Template/tpl_add_review.php');
    include('../Template/tpl_review.php');
    //include('../Template/tpl_picture_slider.php');

    $house_id = $_GET['id_house'];

    if (isset($_SESSION['Username'])) {
        draw_header_profile();
    }
    else{
        draw_header_index();
    }

    //pic_slider($house_id);
    getHouseInfo($house_id);
    drawReviews($house_id);
    drawAddReview($house_id);
    

    draw_footer();
?>
