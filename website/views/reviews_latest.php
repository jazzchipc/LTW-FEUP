<?php
    include_once("../templates/header.php");

    include_once("../database/connection.php");
    include_once("../database/review.php");

    $reviews = getLatestReviews($dbh, 5);

    include("../templates/review_show.php");
?>

<!-- Star rating system -->
<script src="../resources/js/star-rating.js"></script>
<script>
    $(function() {
    $('span.stars').stars();
    });
</script>

<?php
    include_once("../templates/footer.php");
?>