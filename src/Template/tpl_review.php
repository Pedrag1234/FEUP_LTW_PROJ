<?php 
    include_once('../Database/Queries/reviews_queries.php');
    include_once('../Database/Queries/user_queries.php');

    function drawReviews($id_house){
        $reviews = getReviews($id_house);

        if (empty($reviews)) {
            echo "<h3>No reviews found</h3>";
        }
        else{
            foreach($reviews as $review){
                drawReview($review);
            }
        }
    }

    function drawReview($review){
        $user = getUser($review['id_user']); ?>
            <div id="review">
                <h3><?php $review['review_c'] ?></h3>
                <p><?php $review['rating'] ?> </p> 
                <p> <?php $review['id_user'] ?><p>
            </div>
       <?php 
    }





?>