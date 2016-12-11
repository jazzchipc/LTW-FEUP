<?php include ($_SERVER['DOCUMENT_ROOT'].'/templates/header.php'); ?>

<div class="registration" >
    <h2>Register</h2>

    <form action="/database/add_user.php" method="post">

        <label>Username</label>
        <input name="username" type="text" required>

        <label>Email</label>
        <input name="email" type="email" required>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" onkeyup="verifyPasswordSize();" required>
        <span id="confirmMessage" class="confirmMessage"></span>

        <div class="button">
        <input type="submit" value="Register" onclick="return verifyPasswordSize();">
        </div>

    </form>
</div>

<script src="/resources/js/verify_password_size.js"> </script>

<?php include($_SERVER['DOCUMENT_ROOT'].'/templates/footer.php'); ?>
