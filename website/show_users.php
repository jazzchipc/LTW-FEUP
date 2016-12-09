<?php
    include ('templates/header.php');
    include_once('database/connection.php');  
    include_once('database/user.php');

    try{
        $username = $_POST["username"];
        $user = getUserByName($dbh, $username);
        if ($user === false) die("No user");
    }
    catch(PDOException $e){
        die($e->getMessage());
    }
    
    include ('templates/user.php');
    include ('templates/footer.php');
?>
