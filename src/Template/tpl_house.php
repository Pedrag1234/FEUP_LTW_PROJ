<?php 
    include_once('../Database/Queries/house_queries.php');

    function getHouseInfo($id){ 
        $house = getHouse($id); ?>
        <div id="house">
            <h1><?php echo $house['title']; ?></h1>
            <a><?php echo $house['description']; ?></a>
            <br><br>
            <a><?php echo $house['location']; ?></a>
            <a><?php echo $house['rent']; ?></a>
            <a><?php echo $house['classificacao']; ?></a>
        </div> 
        

     <?php }

?>
