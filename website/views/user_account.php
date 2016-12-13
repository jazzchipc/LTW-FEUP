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
    ?>

    <script>
    $( function() {
        $( ".user_information" ).accordion({
            collapsible: true
        });
    } );
    </script>

    <div class="user_information">
        <label>Restaurants</label>
        <div>
            <?php include ($_SERVER['DOCUMENT_ROOT'].'/templates/show_all_restaurants.php'); ?>
        </div>
        <label>Reviews</label>
        <div>
            <p>Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In suscipit faucibus urna. </p>
        </div>
    </div>


<?php
    include ($_SERVER['DOCUMENT_ROOT'].'/templates/footer.php');
?>
