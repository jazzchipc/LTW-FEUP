<section id="restaurant_reviews">
  <?php foreach ($reviews as $review) { ?>

  <?php
    if(!isset($review['date']))
    {
      $review['date'] = "2000-01-01 00:00:00.000";
    } 
  ?>

  <div class="restaurant_review">

    <h3><?=$review['title']?></h3>
    <div>
      <span class="stars"><?=$review['score']?></span>
      <p><?=$review['comment']?></p>
      <h6>On: <?=$review['date']?></h6>
      <a href="/show_replies.php/?review_id=<?=$review['review_id']?>"> <p>Replies</p> </a>
    </div>
  </div>
  <?php } ?>
  
</section>
