<?php 
    include ('../templates/header.php');
    include_once('../database/connection.php');  
    include_once('../database/user.php');
    include_once('../database/restaurant.php');
    include_once('../database/review.php');

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

        $reviews = getReviewsById($dbh, $user['user_id']);

    }
    catch(PDOException $e){
        die($e->getMessage());
    }

    include ('../templates/user_info.php');
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
            <?php
            if (count($restaurants) > 0){
                include ('../templates/show_all_restaurants.php'); 
            }
            else{
                ?>No restaurants to show<?php
            }
            ?>
        </div>
        <label>Reviews</label>
        <div>
            <?php 
            if (count($reviews) > 0){
                include ('../templates/show_all_reviews.php'); 
            }
            else{
                ?>No reviews to show<?php
            }
            ?>
             
        </div>
    </div>


<?php
    include ('../templates/footer.php');
?>
