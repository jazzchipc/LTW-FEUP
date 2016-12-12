<section class="restaurant_info">

    <!-- Star rating system -->
    <script src="/resources/js/star-rating.js"></script>
    <script>
        $(function() {
        $('span.stars').stars();
        });
    </script>

    <br>

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

    <span class="stars"><?=$restaurant['average_score']?></span>
    
    <br>
    <a href="/views/restaurant_reviews.php/?restaurant_id=<?=$restaurant['restaurant_id']?>">Reviews</a>
  
</section>
