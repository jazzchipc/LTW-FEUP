<?php

    if ($_SESSION['authenticated'] != true){ 
        header("Location: ../index.php");
        die();
    }

?>