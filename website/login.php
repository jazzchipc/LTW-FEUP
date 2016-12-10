<?php 

    include ($_SERVER['DOCUMENT_ROOT'].'/templates/header.php'); 

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

        <label>Username/email<input name="username" type="text" value="<?= $suggestedUserName?>" required></label>
        <label>Password<input name="password" type="password" required></label>
        <input type="submit" value="Login">

    </form>
</div>


<?php include($_SERVER['DOCUMENT_ROOT'].'/templates/footer.php'); ?>