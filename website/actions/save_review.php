<?php

    //if (!isset($_POST['id'])) die('No id');
    if (!isset($_POST['title']) || trim($_POST['title']) == '') die('Title is mandatory');

    include("../database/review.php");
    include("../database/connection.php");

    $intScore = intval($_POST['score']);
    $intRestaurantId = intval($_POST['restaurant_id']);
    $intReviewerId = intval($_POST['reviewer_id']);

    try 
    {
        addReview($dbh, $_POST['title'],  $intScore , $_POST['review'], $intRestaurantId, $intReviewerId);
    } 
    catch (PDOException $e) 
    {
        die($e->getMessage());
    }

    header('Location: ../views/restaurants_index.php');
?>