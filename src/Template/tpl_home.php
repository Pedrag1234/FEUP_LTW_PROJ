<?php

include_once('../Database/Queries/house_queries.php');
include('../Template/tpl_picture_slider.php');

function displayHouse($House){
    $photos = getHousePics($House['id_house']);
    if (empty($photos)) {
        $display_photo = ' <img src="../images/no-photo-available.jpg" style="width:100%">';
    }
    else {
        $display_photo = '<img src="data:image/jpeg;base64,'.base64_encode( $photos[0]['photo'] ).'" style="width:100%"/>';
    }
    ?>
    <div id="house">
    <h1><a href="house.php?id_house=<?php echo $House['id_house']?>"><?php echo $House['title']; ?></a></h1>
        <?php echo $display_photo; ?>
        <a><?php echo $House['description']; ?></a>
        <br><br>
        <a><?php echo $House['location']; ?></a>
    </div>
    <?php

}

function displayTopHouses(){
    
    $topHouses = getTopHouses();
    foreach($topHouses as $house)
        displayHouse($house);

}




?>