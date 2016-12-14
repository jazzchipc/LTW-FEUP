<section id="replies">
  <?php foreach ($replies as $reply) { ?>

  <?php

    if(!isset($reply['date']))
    {
      $reply['date'] = "2000-01-01 00:00:00.000";
    } 

    include_once($_SERVER['DOCUMENT_ROOT']."/database/user.php");

    $reviewer_name = getUserById($dbh, $reply['user_id'])['user_name'];

  ?>
  <div class="reply">
    <p><?=$reply['reply_comment']?></p>
    <br>
    By: <?=$reviewer_name?>
    <br>
    <h6>On: <?=$reply['date']?></h6>
    <br>
  </div>
  <?php } ?>
</section>
