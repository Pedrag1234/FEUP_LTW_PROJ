<?php

include_once('../Database/Queries/house_queries.php');
include('../Template/tpl_picture_slider.php');

function displayHouse($House){
    $photos = getHousePics($House['id_house']);
    if (empty($photos)){
        $display_photo = ' <img src="../images/no-photo-available.jpg" style="width:100%">';
    }
    else{
        $display_photo = '<img src="data:image/jpeg;base64,'.base64_encode( $photos[0]['photo'] ).'" style="width:100%"/>';
    }
    ?>
    <div id="house">
        <h1><a href="house.php?id_house=<?php echo $House['id_house']?>"><?php echo $House['title']; ?></a></h1>
        <div id="photo_info">
            <?php 
                echo $display_photo;
            ?>
            <br><br>
            <a><?php echo $House['description']; ?></a>
            <br><br>
            <a><?php echo $House['location']; ?></a>
        </div>
    </div>
    <?php

}

function displayHouses($Houses){
    for ($i = 0; $i < count($Houses); $i++){
        $house = $Houses[$i];
        ?><div id="houseRow"><?php
        displayHouse($house);
        $i++;
        if ($i < count($Houses)) {
            $house = $Houses[$i];
            displayHouse($house);
        }
        else {
            ?>
            <div id="emptyColumn">
            </div>
            <?php
        }
        ?></div><?php
    }
}

function displayTopHouses(){
    
    ?>
    <div id="houses"><?php
    $topHouses = getTopHouses();
    displayHouses($topHouses);

    ?>
    </div><?php
}




?>