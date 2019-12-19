<?php 
include_once('../Database/Queries/reservation_queries.php');
include_once('../Database/Queries/house_queries.php');

function getReservationInfo($id){ 
    $reservation = getReservation($id); 
    print_r($reservation);
    $house = getHouse($reservation['id_house']);
    $date_reservation = getReservationDates($id, $reservation['id_house']); ?>
    <div id="reservation">
        <h1><?php echo $house['title']; ?></h1>
        <a><?php echo $house['description']; ?></a>
        <br><br>
        <a><?php echo $date_reservation['start_date']; ?></a>
        <a><?php echo $date_reservation['end_date']; ?></a>
        <a><?php echo $reservation['payment']; ?></a>
        <a><?php echo $reservation['n_hospedes']; ?></a>
    </div>
<?php 
}
?>