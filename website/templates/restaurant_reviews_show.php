<?php

include_once($_SERVER['DOCUMENT_ROOT'].'/database/connection.php');
include_once($_SERVER['DOCUMENT_ROOT'].'/database/review.php');

$reviews = getReviewsOfRestaurant($dbh, $_GET['restaurant_id']);

include($_SERVER['DOCUMENT_ROOT'].'/templates/review_show.php');

?>