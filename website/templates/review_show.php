<section id="reviews">
  <?php foreach ($reviews as $review) { ?>
  <article>
    <h2><?=$review['title']?></h2>
    <p>Score: <?=$review['score']?></p>
    <p><?=$review['comment']?></p>
    <a href="show_replies.php?review_id=<?=$review['id']?>"> <p>Replies</p> </a>
  </article>
  <?php } ?>
</section>
