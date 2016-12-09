<?php

include('templates/header.php');
?>

<h1>Reviews</h1>

<p><a href="/write_review.php">Write a review...</a></p>
 
<?php

include_once('database/connection.php');
include_once('database/review.php');

$reviews = getAllReviews($dbh);

include('templates/review_show.php');

include('templates/footer.php');

?>