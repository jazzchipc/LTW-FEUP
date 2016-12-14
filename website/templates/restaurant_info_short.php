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
        <h1><?= $restaurant['restaurant_name']; ?></h1>
    </div>

    <div class="restaurant_description">
        "<?= $restaurant['description']; ?>"
    </div>

    <div class="restaurant_evaluation">
        <span class="stars"><?=$restaurant['average_score']?></span>
    </div>
    <a href="/views/restaurant_page.php/?restaurant_id=<?=$restaurant['restaurant_id']?>">See More</a>
  
</div>