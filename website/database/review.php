<?php

// $_POST is a magic PHP variable that will always contain
// any form data that was posted to this page.
// We check here to see if the textfield called 'name' had
// some data entered into it, if so we process it, if not we
// output the form.
// output the form.
//
// if (isset($_POST['name'])) {
//   print_name($_POST['name']);
// }
// else {
//   print_form();
// }
//
// http://stackoverflow.com/questions/595358/how-can-i-execute-a-php-function-in-a-form-action

function addReview($dbh, $title, $score, $post, $restaurant_id, $reviewer_id)
{
    try
    {
        $stmt = $dbh->prepare('INSERT INTO Review (title, comment, score, date) values (?, ?, ?, CURRENT_TIMESTAMP)');
        $stmt->execute(array($title, $post, $score));

        $review_id = intval($dbh->lastInsertId()); 

        $stmt = $dbh->prepare('INSERT INTO Restaurant_Review values (?, ?, ?)');
        $stmt->execute(array($review_id, $reviewer_id, $restaurant_id));
    }

    catch (PDOException $e) 
    {
        echo $e->getMessage();
    }
}

function getReviewsOfRestaurant($dbh, $restaurant_id)
{
    try 
    {
        $stmt = $dbh->prepare('SELECT * FROM Review INNER JOIN Restaurant_Review ON (restaurant_id = ? AND Review.review_id = Restaurant_Review.review_id)');
        $stmt->execute(array($restaurant_id));  

        $reviews = $stmt->fetchAll();
    } 
    catch (PDOException $e) 
    {
        echo $e->getMessage();
    }

    return $reviews;
}

function getAllReviews($dbh)
{
    try 
    {
        $stmt = $dbh->prepare('SELECT * FROM Review');
        $stmt->execute();  

        $reviews = $stmt->fetchAll();
    } 
    catch (PDOException $e) 
    {
        echo $e->getMessage();
    }

    return $reviews;
}

?>