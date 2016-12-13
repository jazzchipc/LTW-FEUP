<?php 
    include ($_SERVER['DOCUMENT_ROOT'].'/templates/header.php');
    include_once($_SERVER['DOCUMENT_ROOT'].'/database/connection.php');  
    include_once($_SERVER['DOCUMENT_ROOT'].'/database/user.php');
    include_once($_SERVER['DOCUMENT_ROOT'].'/database/restaurant.php');

    try{

        if (isset($_POST['username'])){
            $name = $_POST['username'];
            $user = getUserByName($dbh, $name);
        }

        else{
            $id = $_GET['id'];
            $user = getUserById($dbh, $id);
        }
        if ($user === false) die("No User");
        $restaurants = getRestaurantsByOwner($dbh, $user['user_name']);

    }
    catch(PDOException $e){
        die($e->getMessage());
    }

    include ($_SERVER['DOCUMENT_ROOT'].'/templates/user_info.php');
    include ($_SERVER['DOCUMENT_ROOT'].'/templates/show_all_restaurants.php');
    include ($_SERVER['DOCUMENT_ROOT'].'/templates/footer.php');
?>
