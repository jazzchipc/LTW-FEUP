<?php include ($_SERVER['DOCUMENT_ROOT'].'/templates/header.php'); ?>

<div class="Registration" >
    <h2>Register</h2>

    <form action="/database/add_user.php" method="post">

        <label>Username<input name="username" type="text" required></label>
        <label>Email<input name="email" type="email" required></label>
        <label>Password<input name="password" type="password" required></label>
        <input type="submit" value="Register">

    </form>
</div>


<?php include($_SERVER['DOCUMENT_ROOT'].'/templates/footer.php'); ?>