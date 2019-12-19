<?php 
    include_once('../Database/Queries/reservation_queries.php');

    $id_reservation = $_POST['id_reservation'];

    $reservation = getReservation($id_reservation);
    $id_house = $reservation['id_house'];
    $dateReservation = getReservationDates($id_reservation, $id_house);
    $start_date = $dateReservation['start_date'];
    $end_date = $dateReservation['end_date'];
    
    deleteDateReservation($id_reservation, $id_house);
    deleteReservation($id_reservation);
    deleteAvailability($id_house, $start_date, $end_date);

    header('Location: ../pages/user_reservations.php');
    die();

?>