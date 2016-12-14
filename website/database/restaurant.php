<?php

    include_once($_SERVER['DOCUMENT_ROOT']. '/database/connection.php');
    include_once($_SERVER['DOCUMENT_ROOT']. '/database/user.php');

    function addRestaurant($dbh, $user_id, $restaurant_name, $restaurant_description, $restaurant_photo, $opening_time, $closing_time)
    {
        $stmt = $dbh->prepare('INSERT INTO Restaurant (restaurant_name, description, photo_url, opening_time, closing_time) 
                               VALUES (?, ?, ?, ?, ?)');
        $stmt->execute(array($restaurant_name, $restaurant_description, $restaurant_photo, $opening_time, $closing_time));

        $restaurant_id = intval($dbh->lastInsertId()); 

        $owner = isOwner($dbh, $user_id);
        if($owner === false){
            $stmt = $dbh->prepare('INSERT INTO Owner (owner_id) VALUES (?)');
            $stmt->execute(array($user_id));
        }

        $stmt = $dbh->prepare('INSERT INTO Restaurant_Owners (restaurant_id, owner_id) VALUES (?, ?)');
        $stmt->execute(array($restaurant_id, $user_id));
    }

    function getRestaurantsByName($dbh, $name){
        $stmt = $dbh->prepare('SELECT * FROM Restaurant WHERE Restaurant.restaurant_name = ?');
        $stmt->execute(array($name)); //$stmt->execute(array($_GET['name']));
        return $stmt->fetchall();
    }

     function getRestaurantById($dbh, $id){
        $stmt = $dbh->prepare('SELECT * FROM Restaurant WHERE Restaurant.restaurant_id = ?');
        $stmt->execute(array($id)); //$stmt->execute(array($_GET['name']));
        return $stmt->fetch();
    }


    function getRestaurantsByOwner($dbh, $user_name){
        $stmt = $dbh->prepare('SELECT Restaurant.restaurant_id, Restaurant.restaurant_name, Restaurant.description, Restaurant.photo_url, Restaurant.opening_time, Restaurant.closing_time, Restaurant.average_score
                               FROM Restaurant
                               INNER JOIN Restaurant_Owners
                               ON Restaurant_Owners.restaurant_id = Restaurant.restaurant_id
                               INNER JOIN Owner
                               ON Restaurant_Owners.owner_id = Owner.owner_id
                               INNER JOIN User
                               ON User.user_id = Owner.owner_id
                               WHERE User.user_name = ?');
        $stmt->execute(array($user_name));
        return $stmt->fetchall();
    }

?>