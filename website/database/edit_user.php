<?php

    include_once($_SERVER['DOCUMENT_ROOT'].'/database/connection.php');
    include_once ($_SERVER['DOCUMENT_ROOT'].'/database/user.php');

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["new_password"];

    $user = getUserByName($dbh, $username);

    if ($user['email'] != $email){
        $stmt = $dbh->prepare('UPDATE User
                                SET email = ?
                                WHERE User.user_name = ?');
        
        $stmt->execute(array($email, $username));

        echo '<script> alert("Updated user email") </script>';
    }


    if ($user['password'] != $password && strlen($password)>=6 && strlen($password) <= 20){
        $stmt = $dbh->prepare('UPDATE User
                                SET email = ?
                                WHERE User.user_name = ?');
        
        $stmt->execute(array($email, $username));

        echo '<script> alert("Updated user email") </script>';
    }
    

?>