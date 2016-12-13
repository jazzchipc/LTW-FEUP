<?php

include_once($_SERVER['DOCUMENT_ROOT']. '/database/connection.php');
include_once($_SERVER['DOCUMENT_ROOT']. '/database/restaurant.php');
$id = $_GET["restaurant_id"];

$restaurant = getRestaurantById($dbh, $id);

?>


<div class="restaurant_info">

    <form action="/views/edit_restaurant_info.php" method="post">
        <img src="<?= $restaurant['photo_url'] ?>" alt="Restaurant Photo" width=400 height=400>
<?= $restaurant['photo_url'] ?>
        <label><?= $restaurant['restaurant_name']?></label>
        <input name="firstname" type="hidden" value="<?= $user['first_name']?>" readonly="true">      

        <label><?= $restaurant['description']?></label>
        <input name="username" id="username" type="hidden" value="<?= $user['user_name']?>" readonly="true">

        <label><?= $restaurant['opening_time']?></label>
        <input name="email" type="hidden" value="<?= $user['email'] ?>" readonly="true">

        <label><?= $restaurant['closing_time']?></label>
        <input name="password" type="hidden" value="<?= $user['password'] ?>" readonly="true">
        
        <label><?= $restaurant['average_score']?></label>
        <input id="edit" type="submit" value="Edit" style="visibility:hidden">

        
    </form>

    <!-- SESSION USER CAN EDIT ITS OWN PROFILE  -->
    <script>
        var session_user = "<?php echo $_SESSION['user_name']; ?>";
        var user = "<?php echo $user['user_name']; ?>";
        if (session_user == user){ 
            document.getElementById("edit").style.visibility="visible";
        }
    </script>

</div>