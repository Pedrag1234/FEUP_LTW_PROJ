<?php 
    include_once('../Database/Queries/reviews_queries.php');
    include_once('../Database/Queries/user_queries.php');

    function drawReviews($id_house){
        $reviews = getReviews($id_house);

        if (empty($reviews)) {
            echo "<h3>No reviews found</h3>";
        }
        else{
            //print_r($reviews);
            foreach($reviews as $review){
                drawReview($review);
            }
        }
    }

    function drawReview($review){
        $user = getUser($review['id_user']); ?>
            <div id="review">
                <style>
                    .checked {
                        color: orange;
                    }
                </style>
                <h3><?php echo $review['review_c'] ?></h3>
                <?php drawStars($review); ?> 
                <p> <?php echo $review['id_user'] ?><p>
            </div>
       <?php 
    }

    function drawStars($review){
        for ($i=0; $i < $review['rating']; $i++) { 
            echo '<span class="fa fa-star checked"></span>';
        }
        $no_stars = 5 - $review['rating'];
        for ($j=0; $j < $no_stars; $j++) { 
            echo '<span class="fa fa-star"></span>';
        }
    }



?>