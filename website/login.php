<?php include ($_SERVER['DOCUMENT_ROOT'].'/templates/header.php'); ?>

<div class="Login" >
    <h2>Login</h2>

    <form action="/database/add_user.php" method="post">

        <label>Username<input name="username" type="text" required></label>
        <label>Email<input name="email" type="email" required></label>
        <label>Password<input name="password" type="password" required></label>
        <input type="submit" value="Register">

    </form>
</div>


<?php 

include($_SERVER['DOCUMENT_ROOT'].'/templates/footer.php');

?>