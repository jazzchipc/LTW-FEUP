<?php 
    include ($_SERVER['DOCUMENT_ROOT'].'/templates/header.php');
    include_once($_SERVER['DOCUMENT_ROOT'].'/database/connection.php');
    include_once($_SERVER['DOCUMENT_ROOT'].'/database/restaurant.php');
    include_once($_SERVER['DOCUMENT_ROOT'].'/database/review.php');

    try{

        $id = $_GET['restaurant_id'];
        $restaurant = getRestaurantById($dbh, $id);

        if ($restaurant === false) die("No Restaurant");


        $reviews = getReviewsOfRestaurant($dbh, $id);    

    }
    catch(PDOException $e){
        die($e->getMessage());
    }

    include ($_SERVER['DOCUMENT_ROOT'].'/templates/restaurant_info.php');
    ?>

<?php
    include ($_SERVER['DOCUMENT_ROOT'].'/templates/footer.php');
?>
