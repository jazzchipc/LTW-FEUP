<section class="restaurant_info">

    <div class="restaurant_name">
        <label><h3>Name</h3><label>
        <h2><?= $restaurant['restaurant_name']; ?></h2>
    </div>

    <br>

    <div class="restaurant_description">
        <label><h3>Description</h3><label>
        <?= $restaurant['description']; ?>
    </div>

    <br>
    <?php if(!isset($restaurant['average_score']))
    {
    ?>
        <h3>No reviews yet</h3>
    <?php
    }
    else
    {
    ?>
        <span class="stars"><?=$restaurant['average_score']?></span>
    <?php
    }
    ?>

    
    <br>
    <a href="../views/restaurant_reviews.php/?restaurant_id=<?=$restaurant['restaurant_id']?>">Reviews</a>
  
</section>
