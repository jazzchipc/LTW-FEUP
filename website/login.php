<?php 

    include_once($_SERVER['DOCUMENT_ROOT'].'/database/user.php'); 

    if(isset($_COOKIE["user_name"])) 
    {
        $suggestedUserName = $_COOKIE["user_name"];
    } 
    else 
    {
        $suggestedUserName = "";
    }
?>

<div class="Login" >
    <h2>Login</h2>

    <form action="/authentication.php" method="post">

        <label>Username/email</label>
        <input name="username" id="username" type="text" value="<?= $suggestedUserName?>" required>
        <span id="confirmMessage" class="confirmMessage"></span>

        <label>Password</label>
        <input name="password" type="password" required>

        <input type="submit" value="Login">

    </form>
</div>


<?php include_once($_SERVER['DOCUMENT_ROOT'].'/templates/footer.php'); ?>