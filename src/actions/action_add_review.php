<?php 
    include_once('../Database/Queries/house_queries.php');
    include_once('../Database/Queries/user_queries.php');
    include_once('../Database/Queries/reviews_queries.php');
    
    if ($_SESSION['csrf'] != $_POST['csrf']) {
        editProfile($_SESSION['Username'], $name, $username, $date_of_birth, $description);
        echo "Wrong token";
        die();
    }
    else if (!isset($_POST['ReviewComment']) || !isset($_POST['Rating']) || !isset($_SESSION['Username'])) {
        $id_house = $_POST['HouseId'];
        $newpage = "../pages/house.php?id_house=".$id_house;
        header('Location: '.$newpage);
        die();
    }
    else {
        $id_house = $_POST['HouseId'];
        $reviewc = $_POST['ReviewComment'];
        $rating = $_POST['Rating'];

        if (!preg_match("/^[0-9a-zA-Z\s]+$/",$reviewc) ) {
            $newpage = "../pages/house.php?id_house=".$id_house;
            header('Location: '.$newpage);
            die();
        }

        addReview($id_house,$reviewc,$rating,$_SESSION['Username']);

        $newpage = "../pages/house.php?id_house=".$id_house;
        header('Location: '.$newpage);
        die();
    }






?>