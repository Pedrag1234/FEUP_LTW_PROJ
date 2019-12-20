<?php 
include_once('../Database/Queries/reservation_queries.php');
include_once('../Database/Queries/house_queries.php');

function getReservationInfo($id){ 
    $reservation = getReservation($id); 
    $house = getHouse($reservation['id_house']);
    $date_reservation = getReservationDates($id, $reservation['id_house']); ?>
    <div id="reservation">
        <h1><a href="house.php?id_house=<?php echo $id?>"><?php echo $house['title']; ?></a></h1>
        <a><?php echo $house['description']; ?></a>
        <br><br>
        <a>Entrada: <?php echo $date_reservation['start_date']; ?></a>
        <a>Saída: <?php echo $date_reservation['end_date']; ?></a>
        <a>Preço: <?php echo $reservation['payment']; ?> €</a>
        <a>Hóspedes: <?php echo $reservation['n_hospedes']; ?></a>
    </div>
    <form action="../actions/action_cancel_reservation.php" method="post">
        <input type="hidden" name="id_reservation" value= "<?php echo $reservation['id_reservation']?>">
        <button type="submit">Cancelar Reserva</button>
    </form>
<?php 
}
?>