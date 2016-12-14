
<div class="restaurant_info">

    <form action="/views/edit_restaurant_info.php" method="post">
        
        <div class="name">
            <label><?= $restaurant['restaurant_name']?></label>
            <input name="firstname" type="hidden" value="<?= $user['first_name']?>" readonly="true">      
        </div>
        
         <img src="<?= $restaurant['photo_url'] ?>" alt="Restaurant Photo" width=400 height=400>

        <div class="description">
            <label>"<?= $restaurant['description']?>"</label>
        </div>
        <div class="time">
            <label>Open Time: <?= $restaurant['opening_time']?> - <?= $restaurant['closing_time']?></label>
        </div>
        
        <div class="time">
            <label><?= $restaurant['average_score']?></label>
        </div>

        <a href="/views/restaurant_reviews.php/?restaurant_id=<?=$restaurant['restaurant_id']?>">Show Reviews</a>
        
    </form>

</div>