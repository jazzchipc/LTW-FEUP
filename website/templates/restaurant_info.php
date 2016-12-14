
    <!-- Star rating system -->
<script src="/resources/js/star-rating.js"></script>
<script>
        $(function() {
        $('span.stars').stars();
        });
</script>

<div class="restaurant_info">

    <form action="/views/edit_restaurant_info.php" method="post">
        
        <div class="name">
            <label><?= $restaurant['restaurant_name']?></label>     
        </div>
        
         <img src="<?= $restaurant['photo_url'] ?>" alt="Restaurant Photo" width=400 height=400>

        <div class="description">
            <label>"<?= $restaurant['description']?>"</label>
        </div>
        <div class="time">
            <label>Open Time: <?= $restaurant['opening_time']?> - <?= $restaurant['closing_time']?></label>
        </div>
        
        <div class="stars">
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
        </div>

        <a href="/views/restaurant_reviews.php/?restaurant_id=<?=$restaurant['restaurant_id']?>">Show Reviews</a>
        
    </form>

</div>