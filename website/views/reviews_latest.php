<?php
    include_once($_SERVER['DOCUMENT_ROOT']."/templates/header.php");

    include_once($_SERVER['DOCUMENT_ROOT']."/database/connection.php");
    include_once($_SERVER['DOCUMENT_ROOT']."/database/review.php");

    $reviews = getLatestReviews($dbh, 5);

    include($_SERVER['DOCUMENT_ROOT']."/templates/review_show.php");
?>

<!-- Star rating system -->
<script src="/resources/js/star-rating.js"></script>
<script>
    $(function() {
    $('span.stars').stars();
    });
</script>

<?php
    include_once($_SERVER['DOCUMENT_ROOT']."/templates/footer.php");
?>