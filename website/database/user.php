<?php

    function createUser($db)

    function getUserByName($dbh, $name){
        $stmt = $dbh->prepare('SELECT User.user_name FROM User WHERE User.user_name = ?');
        $stmt->execute(array($name)); //$stmt->execute(array($_GET['name']));
        return $stmt->fetch();
    }

    function getUserByEmail($dbh, $email){
        $stmt = $dbh->prepare('SELECT User.email FROM User WHERE User.email = ?');
        $stmt->execute(array($email)); //$stmt->execute(array($_GET['name']));
        return $stmt->fetch();
    }

?>