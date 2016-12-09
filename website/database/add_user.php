<?php

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    include_once($_SERVER['DOCUMENT_ROOT'].'/connection.php');
    include_once ($_SERVER['DOCUMENT_ROOT'].'/user.php');

    if(userExists($dbh, $username, $email) == false){
        $stmt = $dbh->prepare('INSERT INTO User(user_name, email, password)
                                VALUES (?, ?, ?)');
        $stmt->execute(array($username, $email, $password));

        echo '<script> alert("New user added") </script>';
    }

    else{
        echo '<script> alert("User already exists.") </script>';
        header('refresh:2; url=../registration.php');
    }

        /*$res_name = getUserByName($dbh, $username);
        $res_email = getUserByEmail($dbh, $email);

        if($res_name == NULL && $res_email == NULL){
            $stmt = $dbh->prepare('INSERT INTO User(user_name, email, password)
                                VALUES (?, ?, ?)');
            $stmt->execute(array($username, $email, $password));
            echo "User registered!";
            header('refresh:2; url=user.php');
        }
        else if ($res_name != NULL){
            echo  "Username <strong>" . $username . "</strong>" . " is already taken";
            header('refresh:2; url=../registration.php');
        }
        else{
            echo "Email <strong>" . $email . "</strong> is already registered";
            header('refresh:2; url=../registration.php');
        }*/ 

?>
