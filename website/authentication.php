<?php

    include_once('/database/connection.php');
    include_once('/database/user.php');

    $givenUsername = $_POST['username'];
    $givenPassword = $_POST['password'];


    $USER = getUserByName($dbh, $_POST['username']);

    if ($USER === false)
        $USER = getUserByEmail($dbh, $_POST['username']);


    if($USER === false){
    ?>
        <script>
            alert("User does not exist.");
            window.location.href = "/login.php";
        </script>
        
    <?php
    }
    else{
        // For cookies basic functions see: http://php.net/manual/en/features.cookies.php

        $cookieName = "user_name";
        $cookieValue = $USER['user_name'];
        $timeToExpire = 60 * 60 * 24 * 30; // cookie expires after 30 days

        $storedPassword = getPasswordById($dbh, $USER['user_id']);

        if(password_verify($givenPassword, $storedPassword))
        {
            session_start();
            
            $_SESSION['authenticated'] = true;
            $_SESSION['user_id'] = $USER['user_id'];
            $_SESSION['user_name'] = $USER['user_name'];

            echo "<script> window.location.href = \"/index.php\" </script>";
        }
        else
        {
        ?>
            <script> 
                alert("Invalid username or password!");
                window.location.href = "/login.php";
            </script>
        <?php
        }

        setcookie($cookieName, $cookieValue, time()+$timeToExpire, "/");
    }
    
?>