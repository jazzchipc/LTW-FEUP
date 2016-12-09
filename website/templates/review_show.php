<section id="reviews">
  <div id="accordion">
  <?php foreach ($reviews as $review) { ?>

  <?php
    if(!isset($review['date']))
    {
      $review['date'] = "2000-01-01 00:00:00.000";
    } 
  ?>

    <h3><?=$review['title']?></h3>
    <div>
      <p>Score: <?=$review['score']?></p>
      <p><?=$review['comment']?></p>
      <h6>On: <?=$review['date']?></h6>
      <a href="show_replies.php/?review_id=<?=$review['review_id']?>"> <p>Replies</p> </a>
    </div>

  <?php } ?>
  </div>
</section>
