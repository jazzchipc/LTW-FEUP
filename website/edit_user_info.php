
<?php 
    include($_SERVER['DOCUMENT_ROOT'].'/templates/header.php'); 

    $username = $_POST["username"];
    $email = $_POST["email"];
    $old_password = $_POST["password"];

?>

<div class="edit_users_info">

    <form action="database/edit_user.php" method="post">

        <label>Username</label>
        <input name="username" type="text" value="<?= $username?>" readonly="true">

        <label>Email</label>
        <input name="email" type="email" value="<?= $email ?>">

        <label for="old_password">Actual Password</label> 
        <input type="password" name="old_password" id="old_password" value="" placeholder="Insert actual pasword" onkeyup="validateOldPassword();">
        
         
        <label for="new_password">Password</label>
        <input type="password" name="new_password" id="new_password" placeholder="Insert new pasword" onchange="validateNewPassword();">
        
        <label for="confirm_password">Confirm</label> 
        <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm new pasword" onkeyup="validateNewPassword();">
        <span id="confirmMessage" class="confirmMessage"></span>

        <input id="edit" type="submit" value="Edit" onclick="return validateAll();">

    </form>
</div>

<script type="text/javascript">var old = "<?=$old_password?>" </script>
<script src="/resources/js/confirm_passwords.js"> </script>


<?php 
    include($_SERVER['DOCUMENT_ROOT'].'/templates/footer.php'); 
?>