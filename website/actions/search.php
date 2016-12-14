<?php
    include ('../templates/header.php');
    include_once('../database/connection.php');  
    include_once('../database/user.php');
    include_once('../database/restaurant.php');

    try{
        

        /***************        user        ***************/

        //search by username
        $toSearch = $_POST["toSearch"];

        //gets number of spaces between words
        //echo preg_match('/\s/',$toSearch);
        
        $user = getUserByName($dbh, $toSearch);
        if($user !== false){
            include ('../templates/user_info_short.php');
        }

        //search by email
        $user = getUserByEmail($dbh, $toSearch);
        if($user !== false){
            include ('../templates/user_info_short.php');
        }
        
        //search by first name
        $users = getUserByFirstName($dbh, $toSearch);
        if (count($users) > 0){
            include ('../templates/show_all_users.php');
        }

        //search by last name
        $users = getUserByLastName($dbh, $toSearch);
        if (count($users) > 0){
            include ('../templates/show_all_users.php');
        }


        /***************        Restaurants        ***************/

        $restaurants = getRestaurantsByName($dbh, $toSearch);
        if (count($restaurants) > 0){
            include ('../templates/show_all_restaurants.php');
        }

    }
    catch(PDOException $e){
        die($e->getMessage());
    }
    
    
    include ('../templates/footer.php');
?>
