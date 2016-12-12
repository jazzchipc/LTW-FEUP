<?php 
    include ($_SERVER['DOCUMENT_ROOT'].'/templates/header.php');
    include_once($_SERVER['DOCUMENT_ROOT'].'/database/connection.php');  
    include_once($_SERVER['DOCUMENT_ROOT'].'/database/user.php');

    try{
        $id = $_GET['id'];
        $user = getUserById($dbh, $id);
        if ($user === false) die("No user");
    }
    catch(PDOException $e){
        die($e->getMessage());
    }

    include ($_SERVER['DOCUMENT_ROOT'].'/views/user_info.php');
    include ($_SERVER['DOCUMENT_ROOT'].'/templates/footer.php');
?>

