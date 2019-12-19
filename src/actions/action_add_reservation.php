<?php 
    include_once('../Database/Queries/reservation_queries.php');

    $start_date = $_POST['calendario'];
    $end_date = $_POST['calendario2'];
    $location  = $_POST['Location'];
    $description = $_POST['Description'];
    $area = $_POST['Area'];
    $maxguests = $_POST['MaxGuests'];
    $n_rooms = $_POST['Nofrooms'];
    $n_baths = $_POST['NofBathrooms'];

    /*
    if (is_null($title) || is_null($rent) || is_null($location)
     || is_null($description) || is_null($area) || is_null($maxguests)
     || is_null($n_baths) || is_null($n_rooms) || isset($_SESSION['Username'])) {
     
        header('Location: ../pages/home.php');
        die();
    
    }
    else{*/
        $username = $_SESSION['Username'];

        createHouse($title,$rent,$location,$description,$area,$maxguests,$n_rooms,$n_baths,$username);

        /*if (empty($photos)) {
            return;
        }
        else{
            foreach($photos as $photo){
                addHousePhotos($id,$photo);
            }
            return;
        }*/
    //}
    header('Location: ../pages/user_houses.php');
    die();

?>