<?php include ($_SERVER['DOCUMENT_ROOT'].'/templates/header.php'); ?>

<div class="registration" >
    <h2>Register</h2>

    <form enctype="multipart/form-data" action="/database/add_user.php" method="post">

        <label>Username</label>
        <input name="username" type="text" required>

        <label>First name</label>
        <input name="firstname" type="text" required>

        <label>Last name</label>
        <input name="lastname" type="text" required>

        <label>Email</label>
        <input name="email" type="email" required>

        <label>Photo</label>
        <input type="hidden" name="MAX_FILE_SIZE" value="500000" />
        <input name="photo" id="photo" value="" type="file" accept="image/*"/>

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
