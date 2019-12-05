<?php 
    include_once('../Database/Queries/house_queries.php');

function list_user_houses(){ 

    $username = $_SESSION['Username'];
    $houses = getHousesByUser($username); ?>
    
    <?php if (empty($houses)) { ?>
        <h2>No houses found</h2>
    <?php } else { 

       foreach($houses as $house){ ?>
            <div id="house">
                <h1><?php echo $House['title']; ?></h1>
                <a><?php echo $House['description']; ?></a>
                <br><br>
                <a><?php echo $House['location']; ?></a>
            </div>
       <?php } ?>

    <?php } ?>

<?php } ?>
