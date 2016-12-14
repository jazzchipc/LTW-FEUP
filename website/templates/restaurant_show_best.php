<?php

    include_once("../database/connection.php");
    include_once("../database/restaurant.php");

    $restaurants = getBestRestaurants($dbh, 5);?>


<?php

    include('../templates/restaurant_show_several.php');

?>