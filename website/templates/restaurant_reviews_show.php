<?php

include_once('../database/connection.php');
include_once('../database/review.php');

$reviews = getReviewsOfRestaurant($dbh, $_GET['restaurant_id']);

include('../templates/review_show.php');

?>