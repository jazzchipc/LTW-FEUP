<?php

echo $_SESSION['user_name'];
if ($_SESSION['user_name'] === $user['user_name']){

?>

<input type="submit" value="Edit">

<?php
} 
?>