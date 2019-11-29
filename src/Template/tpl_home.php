<?php

include_once('../Database/Queries/house_queries.php');

function displayHouse($House){

    ?>
    <div id="house">
        <h1><?php echo $House['title']; ?></h1>
        <a><?php echo $House['description']; ?></a>
        <a><?php echo $House['location']; ?></a>
    </div>
    <?php

}

function displayTopHouses(){
    
    $topHouses = getAllHouses();
    foreach($topHouses as $house)
        displayHouse($house);

}


/*$topHouses = getTopHouses();*/


?>