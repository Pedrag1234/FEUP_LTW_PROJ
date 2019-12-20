<?php 
    include_once('../Database/Queries/reservation_queries.php');

    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $id_house  = $_POST['id_house'];
    $rent = $_POST['rent'];
    $n_guests = $_POST['numeroHospedes'];


    $startTimeStamp = strtotime($start_date);
    $endTimeStamp = strtotime($end);

    $datediff = (abs($endTimeStamp - $startTimeStamp))/86400;
    $nDays = intval($datediff);
    $payment = $rent * $datediff;


    $username = $_SESSION['Username'];

    $new_reservation = createReservation($n_guests, $nDays, $username, $id_house);

    createDateReservation($start_date, $end_date, $new_reservation, $id_house);

    createAvailability($start_date, $end_date, $id_house);

    header('Location: ../pages/user_reservations.php');
    die();

?>