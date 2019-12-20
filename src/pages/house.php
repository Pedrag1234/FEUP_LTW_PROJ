<?php 
    include('../Template/common/header.php');
    include('../Template/common/footer.php');
    include('../Template/tpl_house.php');
    include('../Template/tpl_add_review.php');
    include('../Template/tpl_review.php');
    include_once('../Database/Queries/reservation_queries.php');

    $house_id = $_GET['id_house'];

    if (isset($_SESSION['Username'])) {
        draw_header_profile();
        $username = $_SESSION['Username'];
    }
    else{
        draw_header_index();
        $username = "";
    }

    //pic_slider($house_id);
    getHouseInfo($house_id);
    drawReviews($house_id,$username);
    if (!isset($_SESSION['Username'])) {
        echo '<h3>Login to Write Reviews</h3>';
    }
    else {
       
        $reviews =  getReviewsbyUserandHouse($house_id,$username);
        $reservations = getReservationofHouse($house_id,$username);
        $newDate = strtotime(date("d-m-y"));
        $reservationComplete = false;
        if (empty($reservations)) {
            echo '<h3>You need to rent the house to be able to write a review</h3>';
        }
        else {
            foreach($reservations as $reservation){
                $resDates = getReservationDates($reservation['id_reservation'],$house_id);
                $lastday = strtotime($resDates['end_date']);

                if ($newDate >= $lastday) {
                    $reservationComplete = true;
                    break;
                }

            }
            if($reservationComplete == true){
                drawAddReview($house_id);
            }
            else {
                echo '<h3>You can only review after your stay</h3>';
            }

        }
        
    }
    

    draw_footer();
?>
