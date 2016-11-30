<?php

    function getUserByName($dbh, $name){
        $stmt = $dbh->prepare('SELECT User.user_name FROM User WHERE name = ?');
        $stmt->execute(array($name)); //$stmt->execute(array($_GET['name']));
        return $stmt->fetch();
    }

    function getRestaurantsOfOwner($dbh, $name){
        $stmt = $dbh->prepare('SELECT Restaurant.restaurant_id 
                                FROM Restaurant_Owners 
                                WHERE Restaurant_Owners.owner_id = ?');
        $stmt->execute(array($name));
        return $stmt->fetch();
    }

    /*
    function getReviewsOfUser($dbh, $name){
        $stmt = $dbh->prepare('SELECT Reviews')
    }*/

?>