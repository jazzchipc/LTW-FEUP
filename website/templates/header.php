<?php
  session_start();
  $_SERVER['DOCUMENT_ROOT'] = $_SERVER['DOCUMENT_ROOT'].""; // change to match directory of website
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

              <li><a href="/views/user_account.php?id=<?=$_SESSION['user_id']?>">Hello, <?=$_SESSION['user_name']?></li>
              <li><a href="/logout.php">Logout</a></li>

            <?php
          }}

            else
            { 
            ?>

            <li><a href="/views/login.php">Login</a></li>
            <li><a href="/views/registration_user.php">Sign Up</a></li>

            <?php
            }
          
          ?>
        </ul>
      </div>
      
      <h1><a href="/index.php" id="title">Food Corner</a></h1>

      <div class="menu" >
        <ul>
          <li><a href="/index.php" id="home">Home</a></li>
          <li><a href="/views/restaurants_index.php">Restaurants</a></li>
          <li><a href="/views/reviews_latest.php">Reviews</a></li>
        </ul>

        
      </div>

      <form action="/actions/search.php" method="post">
              <input id="search_box" name="toSearch" type="text" placeholder="Search..">
      </form>
      
      

    </header>

    <flex-box>

    <left-margin>
      
    </left-margin>

    <content>
    

  