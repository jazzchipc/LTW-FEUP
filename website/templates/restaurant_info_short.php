<div class="restaurant_info_short">

    <!-- Star rating system -->
    <script src="/resources/js/star-rating.js"></script>
    <script>
        $(function() {
        $('span.stars').stars();
        });
    </script>

    <div class="restaurant_photo">
        <img class="photo" src="<?= $restaurant['photo_url'] ?>" alt="Restaurant Photo" width=200 height=200>
    </div>

    <div class="restaurant_name">
        <label><h3>Name</h3><label>
        <h2><?= $restaurant['restaurant_name']; ?></h2>
    </div>

    <div class="restaurant_description">
        <label><h3>Description</h3><label>
        <?= $restaurant['description']; ?>
    </div>

    <div class="restaurant_evaluation">
        <span class="stars"><?=$restaurant['average_score']?></span>
    </div>
    <a href="/templates/restaurant_info.php/?restaurant_id=<?=$restaurant['restaurant_id']?>">See More</a>
  
</div>