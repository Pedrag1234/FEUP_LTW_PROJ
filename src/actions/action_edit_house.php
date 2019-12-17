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

        if (!preg_match("/^[0-9a-zA-Z\s]+$/",$title) || !preg_match("/^[0-9a-zA-Z\s]+$/",$location) || !preg_match("/^[0-9a-zA-Z\s]+$/",$description)) {
            header('Location: ../pages/user_houses.php');
            die();
        }

        updateHouse($title,$rent,$location,$description,$area,$maxguests,$n_rooms,$n_baths,$house_id);
        
        if ($_FILES['housephotos']['error'][0] == 4) {
            sleep(30);
        }
        else{
        $target_dir = "../images/";
        $n_photos = count($_FILES['housephotos']['name']);
            for($i = 0; $i < $n_photos; $i++){
                $target_file = $target_dir . basename($_FILES['housephotos']['name'][$i]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                $check = getimagesize($_FILES['housephotos']['tmp_name'][$i]);

                if($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }

                /*if ($_FILES["housephotos"][$i]["size"] > 500000) {
                    echo "Sorry, your file is too large.";
                    $uploadOk = 0;
                }*/

                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif" ) {
                    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                    $uploadOk = 0;
                }

                addHousePhotos($house_id,file_get_contents($_FILES["housephotos"]["tmp_name"][$i]));
            }
        
        }






        header('Location: ../pages/user_houses.php');
        die();
        
}


?>