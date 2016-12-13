<?php
    include_once($_SERVER['DOCUMENT_ROOT'].'/database/connection.php');
    include_once($_SERVER['DOCUMENT_ROOT'].'/database/user.php');
    if(isset($_POST['action']) && function_exists($_POST['action'])) {
        
        $action = $_POST['action'];
        $getData = $action();
        echo $getData ? 'true' : 'false';
       
    }
    // Needs _POST password and user_id
    function verifyPasswordWithHash()
    {
        if((!isset($_POST['password']) || (!isset($_POST['user_id']))))
        {
            return "Parameter not set.";
        }
        global $dbh;
        $hashedPassword = getPasswordById($dbh, $_POST['user_id']);
        
        return password_verify($_POST['password'], $hashedPassword);
    }
?>