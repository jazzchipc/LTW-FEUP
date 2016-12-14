<?php

include('/templates/header.php');
?>

<h1>Replies</h1>
<br>
 
<?php

include_once('/database/connection.php');
include_once('/database/reply.php');

$replies = getAllReviewReplies($dbh, $_GET['review_id']);

include('/templates/reply_show.php');

?>
    <br>
    <a href="/write_reply.php/?review_id=<?=$_GET['review_id']?>"> <p>Reply</p> </a>

<?php

include('/templates/footer.php');

?>