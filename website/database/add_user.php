<?php

    session_start();

    $username = $_POST["username"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $captcha = $_POST["captcha"];
    
    if($captcha != $_SESSION['captcha']['code'])
    {
        echo '<script> alert("Bad captcha. Please try again.") </script>';
        header('refresh:0; url=/registration_user.php');
        die;
    }

    include_once($_SERVER['DOCUMENT_ROOT'].'/database/connection.php');
    include_once($_SERVER['DOCUMENT_ROOT'].'/database/user.php');
    include_once($_SERVER['DOCUMENT_ROOT'].'/upload_file.php');

     
    $photo = '/resources/img/uploads/users/'. $photo_name;

    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    if(userExists($dbh, $username, $email) == false){
        $stmt = $dbh->prepare('INSERT INTO User(user_name, first_name, last_name, email, photo_url, password)
                                VALUES (?, ?, ?, ?, ?, ?)');
        $stmt->execute(array($username, $firstname, $lastname, $email, $photo, $hashedPassword));

        echo '<script> alert("New user added") </script>';
    }

    else{
        echo '<script> alert("User already exists.") </script>';
        header('refresh:2; url=../registration_user.php');
    } 

?>
