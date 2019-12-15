<?php
  include_once('../Database/Queries/house_queries.php');

if (isset($_POST['Title']) == false || isset($_POST['Rent']) == false || isset($_POST['Location']) == false
     || isset($_POST['Description']) == false || isset($_POST['Area']) == false || isset($_POST['MaxGuests']) == false
     || isset($_POST['Nofrooms']) == false || isset( $_POST['NofBathrooms']) == false || isset($_POST['id_house']) == false) {
     
    header('Location: ../pages/user_houses.php');
    die();
    
}
else{
        $title = $_POST['Title'];
        $rent = $_POST['Rent'];
        $location  = $_POST['Location'];
        $description = $_POST['Description'];
        $area = $_POST['Area'];
        $maxguests = $_POST['MaxGuests'];
        $n_rooms = $_POST['Nofrooms'];
        $n_baths = $_POST['NofBathrooms'];
        $house_id = $_POST['id_house'];

        updateHouse($title,$rent,$location,$description,$area,$maxguests,$n_rooms,$n_baths,$house_id);

        header('Location: ../pages/user_houses.php');
        die();
        
}


?>