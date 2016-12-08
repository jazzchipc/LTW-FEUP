<section id="replies">
  <?php foreach ($replies as $reply) { ?>

  <?php

    if(!isset($reply['date']))
    {
      $reply['date'] = "2000-01-01 00:00:00.000";
    } 

  ?>
  <article>
    <p><?=$reply['reply_comment']?></p>
    <h6>On: <?=$reply['date']?></h6>
  </article>
  <?php } ?>
</section>
