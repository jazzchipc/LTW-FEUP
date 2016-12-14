
<?php 
    include('../templates/header.php'); 

    $username = $_POST["username"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $old_password = $_POST["password"];

?>

<div class="edit_user_info">

    <h2> My Information </h2>
    <form enctype="multipart/form-data" action="../actions/edit_user.php" method="post">

        <div id="fill">
        <label>Username</label>
        <input name="username" type="text" value="<?= $username?>" readonly="true">
        </div>

        <div id="fill">
        <label>First Name</label>
        <input name="firstname" type="text" value="<?= $firstname?>" readonly="true">
        </div>

        <div id="fill">
        <label>Last Name</label>
        <input name="lastname" type="text" value="<?= $lastname?>" readonly="true">
        </div>

        <div id="fill">
        <label>Email</label>
        <input name="email" type="email" value="<?= $email ?>">
        </div>

        <div id="fill">
        <label>Photo</label>
        <input type="hidden" name="MAX_FILE_SIZE" value="500000" />
        <input name="photo" id="photo" type="file" accept="image/*"/>
        </div>

        <div id="fill">
        <label for="old_password">Actual Password</label> 
        <input type="password" name="old_password" id="old_password" value="" placeholder="Insert actual pasword" onkeyup="validateOldPassword();">
        </div>
         
         <div id="fill">
        <label for="new_password">Password</label>
        <input type="password" name="new_password" id="new_password" placeholder="Insert new pasword" onchange="validateNewPassword();">
        </div>

        <div id="fill">
        <label for="confirm_password">Confirm</label> 
        <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm new pasword" onkeyup="validateNewPassword();">
        <span id="confirmMessage" class="confirmMessage"></span>
        </div>

        <div id="fill">
        <input type="submit" id="edit" value="Edit" onclick="return validateAll();">
        </div>

    </form>
</div>

<script type="text/javascript">

    var user_id = "<?=$_SESSION['user_id'];?>";

</script>
<script src="../resources/js/confirm_passwords.js"> </script>


<?php 
    include('../templates/footer.php'); 
?>