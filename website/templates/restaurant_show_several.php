    <!-- Star rating system -->
    <script src="../resources/js/star-rating.js"></script>
    <script>
        $(function() {
        $('span.stars').stars();
        });
    </script>

<?php
    foreach($restaurants as $restaurant)
    {
        include('../templates/restaurant_show.php');
    }
?>