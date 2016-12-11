<?php 

    include($_SERVER['DOCUMENT_ROOT'].'/templates/header.php'); 
    include($_SERVER['DOCUMENT_ROOT'].'/vendors/simple-php-captcha/simple-php-captcha.php');

    // Captcha configuration
    $_SESSION['captcha'] = simple_php_captcha(array(
        'min_length' => 5,
        'max_length' => 7,
        'characters' => 'ABCDEFGHJKLMNPRSTUVWXYZabcdefghjkmnprstuvwxyz23456789',
        'min_font_size' => 20,
        'max_font_size' => 28,
        'color' => '#666',
        'angle_min' => 0,
        'angle_max' => 10,
        'shadow' => true,
        'shadow_color' => '#fff',
        'shadow_offset_x' => -1,
        'shadow_offset_y' => 1
    ));
?>

<div class="registration" >
    <h2>Register</h2>

    <form action="/database/add_user.php" method="post">

        <label>Username</label>
        <input name="username" type="text" autocomplete="off" required>

        <label>Email</label>
        <input name="email" type="email" required>

        <label for="password">Password</label>
        <input type="password" name="password" id="password" onkeyup="verifyPasswordSize();" required>
        <span id="confirmMessage" class="confirmMessage"></span>

        <label>Captcha</label>
        <img src="<?= $_SESSION['captcha']['image_src']?>">
        <br><input type="text" name="captcha" autocomplete="off" required>

        <div class="button">
        <input type="submit" value="Register" onclick="return verifyPasswordSize();">
        </div>

    </form>
</div>

<script src="/resources/js/verify_password_size.js"> </script>

<?php include($_SERVER['DOCUMENT_ROOT'].'/templates/footer.php'); ?>
