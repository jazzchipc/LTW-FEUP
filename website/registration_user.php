<?php include ('templates/header.php'); ?>

<h2>Register</h2>

<form action="database/add_user.php" method="post">

    <label>Username<input name="username" type="text" required></label>
    <label>Email<input name="email" type="text" required></label>
    <label>Password<input name="password" type="password" required></label>
    <input type="submit" value="Register">

</form>

<?php 

include('templates/footer.php');

?>