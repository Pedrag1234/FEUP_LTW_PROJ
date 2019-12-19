<?php 
    include_once('../Database/Queries/reservation_queries.php');
    include_once('../Template/tpl_reservation_display.php');

function list_user_reservations(){ 

    $username = $_SESSION['Username'];
    $reservations = getReservationsByUser($username); ?>
    
    <?php if (empty($reservations)) { ?>
        <h2>No reservations found</h2>
    <?php
    } else { 
       foreach($reservations as $reservation){ 
            $date_reservation = getReservationDates($reservation['id_reservation'], $reservation['id_house']); 
            displayReservation($reservation, $date_reservation);
        } 
    } 

}
?>