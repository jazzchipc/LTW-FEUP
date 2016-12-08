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

function addReview($dbh, $title, $score, $post)
{
    try
    {
        $stmt = $dbh->prepare('INSERT INTO Review (title, comment, score, date) values (?, ?, ?, CURRENT_TIMESTAMP)');
        $stmt->execute(array($title, $post, $score));
    }

    catch (PDOException $e) 
    {
        echo $e->getMessage();
    }

    return intval($dbh->lastInsertId());    // get ID of added record
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