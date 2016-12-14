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

include_once('connection.php');
include_once('user.php');

function addReview($dbh, $title, $score, $post, $restaurant_id, $reviewer_id)
{
    try
    {
        $stmt = $dbh->prepare('INSERT INTO Review (title, comment, score, date) values (?, ?, ?, CURRENT_TIMESTAMP)');
        $stmt->execute(array($title, $post, $score));

        $review_id = intval($dbh->lastInsertId()); 

        $reviewer = isReviewer($dbh, $reviewer_id);
        if($reviewer === false){
            $stmt = $dbh->prepare('INSERT INTO Reviewer (reviewer_id) VALUES (?)');
            $stmt->execute(array($reviewer_id));
        }

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


function getReviewsById($dbh, $id){
    
    try{
        $stmt = $dbh->prepare ('SELECT * 
                                FROM Review
                                INNER JOIN Restaurant_Review
                                ON Restaurant_Review.review_id = Review.review_id
                                INNER JOIN Reviewer
                                ON Reviewer.reviewer_id = Restaurant_Review.reviewer_id
                                INNER JOIN User
                                ON User.user_id = Reviewer.reviewer_id
                                WHERE User.user_id = ?');
        $stmt->execute(array($id));  
        $reviews = $stmt->fetchAll();
    } 
    catch (PDOException $e) 
    {
        echo $e->getMessage();
    }

    return $reviews;
}


function getLatestReviews($dbh, $numberOfReviews)
{
    try 
    {
        $stmt = $dbh->prepare('SELECT * FROM Review ORDER BY date DESC LIMIT ?');
        $stmt->execute(array($numberOfReviews));  

        $reviews = $stmt->fetchAll();
    } 
    catch (PDOException $e) 
    {
        echo $e->getMessage();
    }

    return $reviews;
}

function getReviewer($dbh, $review_id)
{
    try 
    {
        $stmt = $dbh->prepare('SELECT Restaurant_Review.reviewer_id FROM Restaurant_Review INNER JOIN Review 
                                ON Review.review_id = Restaurant_Review.review_id 
                                WHERE Review.review_id = ?');

        $stmt->execute(array($review_id));  

        $reviewer_id = $stmt->fetch()['reviewer_id'];
    } 
    catch (PDOException $e) 
    {
        echo $e->getMessage();
    }

    return $reviewer_id;
}

?>