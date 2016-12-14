<?php

    include_once($_SERVER['DOCUMENT_ROOT']."/database/connection.php");
    include_once($_SERVER['DOCUMENT_ROOT']."/database/restaurant.php");

    $restaurants = getBestRestaurants($dbh, 5);?>


<?php

    include($_SERVER['DOCUMENT_ROOT'].'/templates/restaurant_show_several.php');

?>