<?php 


    function drawAddReview($id_house){ ?>
        <form action="../actions/action_add_review.php" method="post">
            <label> Comment
                <textarea cols="23" rows="5" name="ReviewComment"></textarea>
            </label>
            <label> Rating
                <input type="number" name="Rating">
            </label>
            <input type="hidden" name="HouseId" value="<?php echo $id_house ?>">
            <button type="submit">Add Review</button>    
        </form>     
    <?php }

?>