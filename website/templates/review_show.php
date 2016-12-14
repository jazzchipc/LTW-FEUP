<section id="restaurant_reviews">
  <?php foreach ($reviews as $review) { ?>

  <?php
    if(!isset($review['date']))
    {
      $review['date'] = "2000-01-01 00:00:00.000";
    } 

    $reviewer_id = getReviewer($dbh, $review['review_id']);

    include_once($_SERVER['DOCUMENT_ROOT']."/database/user.php");

    $reviewer_name = getUserById($dbh, $reviewer_id)['user_name'];
  ?>

  <div class="restaurant_review">

    <h3><?=$review['title']?></h3> 
    <p><?=$review['comment']?></p>
    <br>
    <div>
      <span class="stars"><?=$review['score']?></span>
      <br>
      By: <?=$reviewer_name?>
      <br>
      <h6>On: <?=$review['date']?></h6>
      <br>
      <a href="/show_replies.php/?review_id=<?=$review['review_id']?>"> <p>Replies</p> </a>
    </div>
  </div>
  <?php } ?>
  
</section>
