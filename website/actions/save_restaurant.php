<?php

    include_once('../database/connection.php');
    include_once('../database/restaurant.php');

    $userId = $_POST['user_id'];
    
    $givenName = $_POST['restaurant_name'];
    $givenDescription = $_POST['restaurant_description'];

    $open_minutes = $_POST['open_minutes'];
    if (strlen($open_minutes) == 1){
        $open_minutes = $_POST['open_minutes'] . '0';
    }

    $close_minutes = $_POST['close_minutes'];
    if (strlen($close_minutes) == 1){
        $close_minutes = $_POST['close_minutes'] . '0';
    }

    $opening_time = $_POST['open_hours'] . ':' . $open_minutes;
    $closing_time = $_POST['close_hours'] . ':' . $close_minutes;

    include_once('upload_file_restaurant.php');
    $givenImage = '/resources/img/uploads/restaurants/'. $restaurant_photo_name;

    try
    {
        addRestaurant($dbh, $userId, $givenName, $givenDescription, $givenImage, $opening_time, $closing_time);
    }
    catch (PDOException $e) 
    {
        die($e->getMessage());
    }

    header("Location: ../views/restaurants_index.php");

?>