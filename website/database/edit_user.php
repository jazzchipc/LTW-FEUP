<?php

    include_once($_SERVER['DOCUMENT_ROOT'].'/database/connection.php');
    include_once ($_SERVER['DOCUMENT_ROOT'].'/database/user.php');

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["new_password"];

    $user = getUserByName($dbh, $username);

    $user_aux = getUserByEmail($dbh, $email);

    if ($user['email'] != $email){
        if ($user_aux === false){
            $stmt = $dbh->prepare('UPDATE User
                                    SET email = ?
                                    WHERE User.user_name = ?');
            
            $stmt->execute(array($email, $username));

            echo '<script> alert("Updated user email") </script>';
        }
        else{
            echo '<script> alert("This email is already registered") </script>';
        }
    }

    if ($user['password'] != $password && strlen($password) > 0){
        $stmt = $dbh->prepare('UPDATE User
                                SET password = ?
                                WHERE User.user_name = ?');
        
        $stmt->execute(array($password, $username));

        echo '<script> alert("Updated user password") </script>';
    }
    
    header('Location: ../index.php');
?>