<?php 

    include ('../templates/header.php'); 

    if(isset($_COOKIE["user_name"])) 
    {
        $suggestedUserName = $_COOKIE["user_name"];
    } 
    else 
    {
        $suggestedUserName = "";
    }

    if(isset($_SESSION['authenticated']))
    {
        if($_SESSION['authenticated'] == true)
        {
            header('Refresh:0; url= ../index.php');
            echo '<script language="javascript">';
            echo 'alert("You\'re already logged in")';
            echo '</script>';
        }
    }
    else
    {
    ?>

    <div class="Login" >
        <h1>Login</h1>

        <form class ="edit_user_info" action="../actions/authentication.php" method="post">

            <div><label>Username/email</label>
            <input name="username" type="text" value="<?= $suggestedUserName?>" required></div>
  
            <div><label>Password</label>
            <input name="password" type="password" required></div>

            <div>
            <input type="submit" value="Login"></div>

        </form>
    </div>
    
    <?php
    } 

    include('../templates/footer.php'); ?>