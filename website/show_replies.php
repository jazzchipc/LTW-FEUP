<?php

include('templates/header.php');
?>

<h1>Replies</h1>
 
<?php

include_once('database/connection.php');
include_once('database/reply.php');

$replies = getAllReviewReplies($dbh, $_GET['review_id']);

include('templates/reply_show.php');

?>

    <a href="/write_reply.php/?review_id=<?=$_GET['review_id']?>"> <p>Reply</p> </a>
    <a href="/show_reviews.php"> <p>Back to reviews</p> </a>

<?php

include('templates/footer.php');

?>