
<?php
    include ('database/connection.php');
    include ('database/users.php');
    
    function showUser($username){
        try{
            $user = getUserByName($username);

            if ($user === false) die("No user");
        }
        catch(PDOException $e){
            die($e->getMessage());
        }
    }

    include ('templates/header.php');


?>
