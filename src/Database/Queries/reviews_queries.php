<?php 
    include_once('../Database/connection.php');

    function getReviews($id_house){
        global $dbh;

        $stmt = $dbh->prepare('SELECT * FROM review WHERE id_house = ?');
		$stmt->execute(array($id_house));
		return $stmt->fetchAll();
    }


    function addReview($id_house,$reviewc,$rating,$user){
        global $dbh;
        $stmt = $dbh->prepare('INSERT INTO review VALUES(null,?,?,?,?)');
        $stmt->execute(array($rating,$reviewc,$id_house,$user));
        $reviews = getReviews($id_house);
        $currentRating = $rating;
        $i = 1;
        foreach($reviews as $review){
            $currentRating += $review['rating'];
            $i++;
        }
        $currentRating = $currentRating/$i;
        $currentRating = intval($currentRating);
        
        $stmt2 = $dbh->prepare('UPDATE house SET classificacao=? WHERE id_house=?');
        $stmt2->execute(array($currentRating,$id_house));
    }

    function deleteReview($id_review){
        global $dbh;
        $stmt = $dbh->prepare('DELETE FROM review WHERE id_review = ?');
        $stmt->execute(array($id_review));
    }

    function getReviewsbyUserandHouse($id_house,$username){
        global $dbh;
        $stmt = $dbh->prepare('SELECT * FROM review WHERE id_house=? AND id_user=?');
        $stmt->execute(array($id_house,$username));
        return $stmt->fetchAll();
    }


?>