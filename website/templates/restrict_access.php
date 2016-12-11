<?php

    if (!$_SESSION['authenticated']){ 
        header("Location: /index.php");
        die();
    }

?>