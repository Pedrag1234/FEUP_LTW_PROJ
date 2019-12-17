<?php

include_once('../Database/Queries/house_queries.php');
include('../Template/tpl_picture_slider.php');

function displayHouse($House){
    ?>
    <div id="house">
    <h1><a href="house.php?id_house=<?php echo $House['id_house']?>"><?php echo $House['title']; ?></a></h1>
        <?php pic_slider($House['id_house']); ?>
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