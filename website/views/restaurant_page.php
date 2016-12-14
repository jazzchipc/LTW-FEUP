<?php 
    include ('../templates/header.php');
    include_once('../database/connection.php');
    include_once('../database/restaurant.php');
    include_once('../database/review.php');

    try{
        $id = $_GET['restaurant_id'];
        $restaurant = getRestaurantById($dbh, $id);

        if ($restaurant === false) die("No Restaurant");


        $reviews = getReviewsOfRestaurant($dbh, $id);    

    }
    catch(PDOException $e){
        die($e->getMessage());
    }

    include ('../templates/restaurant_info.php');
    ?>

<?php
    include ('../templates/footer.php');
?>
