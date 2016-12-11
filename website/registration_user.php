<?php include ($_SERVER['DOCUMENT_ROOT'].'/templates/header.php'); ?>

<div class="Registration" >
    <h2>Register</h2>

    <form action="/database/add_user.php" method="post">

        <label>Username</label>
        <input name="username" type="text" required>

        <label>Email</label>
        <input name="email" type="email" required>

        <label>Password</label>
        <input name="password" type="password" required>
        
        <input type="submit" value="Register">

    </form>
</div>


<?php include($_SERVER['DOCUMENT_ROOT'].'/templates/footer.php'); ?>