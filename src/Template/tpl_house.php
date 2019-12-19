<?php 
    include_once('../Database/Queries/house_queries.php');
    include('../Template/tpl_picture_slider.php');


    function getHouseInfo($id){ 
        $house = getHouse($id); ?>
        <div id="house">
            <h1><?php echo $house['title']; ?></h1>
            <?php pic_slider($id); ?>
            <a><?php echo $house['description']; ?></a>
            <br><br>
            <a><?php echo $house['location']; ?></a>
            <a><?php echo $house['rent']; ?></a>
            <?php drawStarsHouse($house['classificacao']);?>
            <?php if(isset($_SESSION['Username']) == true && $_SESSION['Username'] == $house['id_owner']){?>
                <a href="edit_house.php?id_house=<?php echo $house['id_house']?>">Edit House Info</a>
            <?php } ?>    
        </div> 
        

     <?php }

function drawStarsHouse($rating){
    for ($i=0; $i < $rating; $i++) { 
        echo '<span class="fa fa-star checked"></span>';
    }
    $no_stars = 5 - $rating;
    for ($j=0; $j < $no_stars; $j++) { 
        echo '<span class="fa fa-star"></span>';
    }
}
?>
