<?php
    include_once('../Database/Queries/user_queries.php');

    function draw_profile(){
        $username = $_SESSION['Username'];
        $user = getUser($username);
        $name = $user['name'];
        $date_of_birth = $user['date_of_birth'];
        $about = $user['about'];
        ?>
        <div id="Profile">
            <h1>Name: <?php echo $name ?></h1>
            <h2>username: <?php echo $username ?></h2>
            <h3>Date of birth: <?php echo $date_of_birth ?></h3>
            <h3>About: </h3>
            <a><?php echo $about ?></a>
            <?php echo '<img src="data:image/jpeg;base64,'.base64_encode( $user['photo'] ).'"/>'; ?>
        </div>
        <?php


    }

?>
