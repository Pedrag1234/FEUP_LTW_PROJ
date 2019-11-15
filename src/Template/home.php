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
    
    /*$topHouses = array(
        0 => array('title' => 'House', 'description'=>'beautiful house', 'location' => 'Portugal')
    );*/
    $topHouses = getTopHouses();
    foreach($topHouses as $house)
        displayHouse($house);

}


/*$topHouses = getTopHouses();*/


?>