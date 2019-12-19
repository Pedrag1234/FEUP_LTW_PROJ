<?php

include_once('../Database/Queries/reservation_queries.php');
include_once('../Database/Queries/house_queries.php');

function displayReservation($reservation, $date_reservation){
    $house = getHouse($reservation['id_house']);
    ?>
    <div id="reservation_display">
        <h1><a href="reservation.php?id_reservation=<?php echo $house['title']?>"><?php echo $date_reservation['start_date']; ?></a></h1>
        <a><?php echo $reservation['payment']; ?></a>
        <a><?php echo $date_reservation['end_date']; ?></a>
    </div>
    <?php

}
?>