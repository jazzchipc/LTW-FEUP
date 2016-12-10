
<?php 
    include($_SERVER['DOCUMENT_ROOT'].'/templates/header.php'); 

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

?>

  <script>
    $( function() {
        $( document ).tooltip();
    } );
    </script>

<div class="edit_users_info">
    
    <form action="database/add_user.php" method="post">

        <label>Username<input name="username" type="text" value="<?= $username?>" readonly="true"></label>
        <label>Email <input name="email" type="email" value="<?= $email ?>"></label>
        <label>Old Password <input id="old_password" type="password" value="" required></label>
        <label>New Password <input id="new_password" type="password" value="" required></label>
        <label>Confirm Password <input id="confirm_password" type="password" value="" required></label>
        <input type="submit" value="Edit">

    </form>
</div>

<script src="/resources/js/confirm_passwords.js"></script>


<?php 
    include($_SERVER['DOCUMENT_ROOT'].'/templates/footer.php'); 
?>