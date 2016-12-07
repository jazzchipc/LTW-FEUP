<?php

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    var_dump($username, $email, $password);

    include ('connection.php');
    
    $stmt = $dbh->prepare('INSERT INTO User(user_name, email, password)
                               VALUES (?, ?, ?)');
    $stmt->execute(array($username, $email, $password));

?>
