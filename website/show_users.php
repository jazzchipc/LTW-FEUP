<?php
    include ($_SERVER['DOCUMENT_ROOT'].'/templates/header.php');
    include_once($_SERVER['DOCUMENT_ROOT'].'/database/connection.php');  
    include_once($_SERVER['DOCUMENT_ROOT'].'/database/user.php');

    try{
        $username = $_POST["username"];
        $user = getUserByName($dbh, $username);
        if ($user === false) die("No user");
    }
    catch(PDOException $e){
        die($e->getMessage());
    }
    
    include ($_SERVER['DOCUMENT_ROOT'].'/templates/user_name.php');
    include ($_SERVER['DOCUMENT_ROOT'].'/templates/footer.php');
?>
