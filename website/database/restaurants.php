<?php

    function getRestaurantsByName($dbh, $name){
        $stmt = $dbh->prepare('SELECT Restaurant.restaurant_name FROM Restaurant WHERE Restaurant.restaurant_name = ?');
        $stmt->execute(array($name)); //$stmt->execute(array($_GET['name']));
        return $stmt->fetch();
    }

    function getRestaurantsByOwner($dbh, $user_name){
        $stmt = $dbh->prepare('SELECT Restaurant.restaurant_name
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

    var_dump(getRestaurantsByOwner($dbh, 'Catarina'));

?>