<?php

    function createUser($db)

    function getRestaurantsByName($dbh, $name){
        $stmt = $dbh->prepare('SELECT Restaurant.restaurant_name FROM Restaurant WHERE Restaurant.restaurant_name = ?');
        $stmt->execute(array($name)); //$stmt->execute(array($_GET['name']));
        return $stmt->fetch();
    }

    function getRestaurantsByOwner($dbh, $name){
        $stmt = $dbh->prepare('SELECT Restaurant_Owners.restaurant_id 
                                FROM Restaurant_Owners 
                                WHERE Restaurant_Owners.owner_id = ?');
        $stmt->execute(array($name));
        return $stmt->fetch();
    }

  

?>