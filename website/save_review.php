<?php

    //if (!isset($_POST['id'])) die('No id');
    if (!isset($_POST['title']) || trim($_POST['title']) == '') die('Title is mandatory');

    include($_SERVER['DOCUMENT_ROOT']."/database/review.php");
    include($_SERVER['DOCUMENT_ROOT']."/database/connection.php");

    $intScore = intval($_POST['score']);

    try 
    {
        addReview($dbh, $_POST['title'],  $intScore , $_POST['review']);
    } 
    catch (PDOException $e) 
    {
        die($e->getMessage());
    }

    header('Location: /show_reviews.php');
?>