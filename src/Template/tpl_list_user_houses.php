<?php 
    include_once('../Database/Queries/house_queries.php');
    include_once('../Template/tpl_home.php');
    include_once('../Template/tpl_add_house.php');

function list_user_houses(){ 

    $username = $_SESSION['Username'];
    $houses = getHousesByUser($username); ?>
    
    <?php if (empty($houses)) { ?>
        <h2>No houses found</h2>
    <?php add_House();
    } else { 

       foreach($houses as $house){ 
            displayHouse($house);
        } ?>
    <?php add_House();
} ?>

<?php }



?>
    