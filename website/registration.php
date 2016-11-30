<?php

include('templates/html_header.html'); ?>

<h2>Register</h2>

<form action="database/add_user.php" method="post">

    <input name="username" type="text" required>
    <input name="password" type="password" required>
    <input type="submit" value="Register">

</form>

<?php 

include('templates/html_footer.html');

?>