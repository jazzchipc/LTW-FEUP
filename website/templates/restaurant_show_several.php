    <!-- Star rating system -->
    <script src="/resources/js/star-rating.js"></script>
    <script>
        $(function() {
        $('span.stars').stars();
        });
    </script>

<?php
    foreach($restaurants as $restaurant)
    {
        include($_SERVER['DOCUMENT_ROOT'].'/templates/restaurant_info_short.php');
    }
?>