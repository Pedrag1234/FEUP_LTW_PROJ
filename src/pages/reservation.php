<?php 
    include('../Template/common/header.php');
    include('../Template/common/footer.php');
    include('../Template/tpl_reservation.php');

    $reservation_id = $_GET['id_reservation'];

    if (isset($_SESSION['Username'])) {
        draw_header_profile();
    }
    else{
        draw_header_index();
    }

    getReservationInfo($reservation_id);

    
    draw_footer();
?>