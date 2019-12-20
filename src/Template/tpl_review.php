<?php 
    include_once('../Database/Queries/reviews_queries.php');
    include_once('../Database/Queries/user_queries.php');

    function drawReviews($id_house,$user){
        $reviews = getReviews($id_house);

        if (empty($reviews)) {
            echo "<h3>No reviews found</h3>";
        }
        else{
            //print_r($reviews);
            foreach($reviews as $review){
                drawReview($review,$user);
            }
        }
    }

    function drawReview($review,$user){
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
                <?php 
                if ($review['id_user'] == $user) { 
                  echo '<a href="../actions/action_delete_review.php?house_id='.$id_house.'&review_id='.$review['id_review'].'">Delete Review</a>';
                }
                ?>
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