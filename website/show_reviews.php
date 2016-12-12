<?php

include('templates/header.php');
?>
<div>

<h1>Reviews</h1>

<p><a href="/write_review.php">Write a review...</a></p>

<!-- This script activates the accordion function of jqueryUI, to be used in the review_show.php. -->
 <script>
  $( function() {
    $( "#accordion" ).accordion({
      collapsible: true,
      heightStyle: "content"
    });
  } );
  </script>

  <!-- Star rating system -->
   <script src="/resources/js/star-rating.js"></script>
   <script>
    $(function() {
      $('span.stars').stars();
    });
   </script>

</div>
 
<?php

include_once('database/connection.php');
include_once('database/review.php');

$reviews = getAllReviews($dbh);

include('templates/review_show.php');

include('templates/footer.php');

?>