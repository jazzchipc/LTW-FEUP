<?php
    
    include_once($_SERVER['DOCUMENT_ROOT'].'/database/connection.php');  
    include_once($_SERVER['DOCUMENT_ROOT'].'/database/restaurant.php');

    
    try{

        $username = $_POST["username"];
        $restaurants = getRestaurantsByOwner($dbh, $username);
        include($_SERVER['DOCUMENT_ROOT'].'/templates/show_all_restaurants.php'); 
    }
    catch(PDOException $e){
        die($e->getMessage());
    }
    

    
?>