<?php

    function addRestaurant($dbh, $user_id, $restaurant_name, $restaurant_description, $restaurant_photo)
    {
        $stmt = $dbh->prepare('INSERT INTO Restaurant (restaurant_name, description, photo_url) VALUES (?, ?, ?)');
        $stmt->execute(array($restaurant_name, $restaurant_description, $restaurant_photo));

        $restaurant_id = intval($dbh->lastInsertId()); 

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
        $stmt = $dbh->prepare('SELECT *
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