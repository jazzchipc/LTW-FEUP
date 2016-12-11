<?php
  session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Food Corner</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/resources/css/reset.css">
    <link rel="stylesheet" href="/resources/css/jquery-ui.theme.css">
    <link rel="stylesheet" href="/resources/css/jquery-ui.min.css">
    <link rel="stylesheet" href="/resources/css/jquery-ui.structure.css">

    <link rel="stylesheet" href="/resources/css/style.css">
    <link rel="icon" href= "/resources/img/fork_knife.ico">
    

    <script src="/lib/jquery.js"></script>
    <script src="/lib/jquery-ui.min.js"></script>

  </head>
  <body>

    <header>

      <div class="login" >
        <ul>
          <?php
          if(isset($_SESSION['authenticated']))
          {
            if($_SESSION['authenticated'] == true)
            {
            ?>

              <li>Hello <?=$_SESSION['user_name']?></li>
              <li><a href="/logout.php">Logout</a></li>

            <?php
          }}

            else
            { 
            ?>

            <li><a href="/login.php">Login</a></li>
            <li><a href="/registration_user.php">Sign Up</a></li>

            <?php
            }
          
          ?>
        </ul>
      </div>
      
      <h1><a href="/index.php" id="title">Food Corner</a></h1>

      <div class="menu" >
        <ul>
          <li>Home</li>
          <li>About me</li>
          <li>Restaurants</li>
        </ul>
        
      </div>

       <form action="/show_users.php" method="post">
              <input id="search_box" name="username" type="text" placeholder="Search..">
      </form>
      
      

    </header>

    <content>
    

  