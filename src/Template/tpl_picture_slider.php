<?php 

    include_once('../Database/Queries/house_queries.php');

    function pic_slider($id){
        $pics = getHousePics($id);
        if (empty($pics)) { ?>

            <div class="slideshow">
                <div class="House Slides">
                    <div class="numbertext">1 / 1</div>
                    <img src="../images/no-photo-available.jpg" style="width:100%">
                </div>
            </div>
        <?php }

        else{
            echo "<h1> Upload works <\h1>";
        }
    }


?>