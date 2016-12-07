<?php
include('templates/html_header.html');
 
include_once('database/connection.php');
include_once('database/review.php');

$reviews = getAllReviews($dbh);

include('templates/review_show.php');

 ?>



<?php
include('templates/html_footer.html');
?>