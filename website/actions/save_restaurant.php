<?php

    include_once($_SERVER['DOCUMENT_ROOT']. '/database/connection.php');
    include_once($_SERVER['DOCUMENT_ROOT']. '/database/restaurant.php');

    $userId = $_POST['user_id'];
    
    $givenName = $_POST['restaurant_name'];
    $givenDescription = $_POST['restaurant_description'];
    $givenImage = $_POST['restaurant_image'];

    try
    {
        addRestaurant($dbh, $userId, $givenName, $givenDescription, $givenImage);
    }
    catch (PDOException $e) 
    {
        die($e->getMessage());
    }

    header("Location: /views/restaurants_index.php");

?>