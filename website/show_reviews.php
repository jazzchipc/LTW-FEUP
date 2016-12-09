<?php

include('templates/header.php');
 
include_once('database/connection.php');
include_once('database/review.php');

$reviews = getAllReviews($dbh);

include('templates/review_show.php');

include('templates/footer.php');

?>