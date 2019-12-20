<?php 
    include_once('../Database/Queries/reservation_queries.php');

    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $id_house  = $_POST['id_house'];
    $rent = $_POST['rent'];
    $n_guests = $_POST['numeroHospedes'];

    $datediff = ((strtotime($end_date) - strtotime($start_date))/(60*60*24));
    $payment = $rent * $datediff;


    $username = $_SESSION['Username'];

    $new_reservation = createReservation($n_guests, $payment, $username, $id_house);

    createDateReservation($start_date, $end_date, $new_reservation, $id_house);

    createAvailability($start_date, $end_date, $id_house);

    header('Location: ../pages/user_reservations.php');
    die();

?>