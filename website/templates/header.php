<!DOCTYPE html>
<html>
  <head>
    <title>My Restaurant Site</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/resources/css/reset.css">
    <link rel="stylesheet" href="/resources/css/jquery-ui.theme.css">
    <link rel="stylesheet" href="/resources/css/jquery-ui.min.css">
    <link rel="stylesheet" href="/resources/css/jquery-ui.structure.css">

    <link rel="stylesheet" href="/resources/css/style.css">
    

    <script src="/lib/jquery.js"></script>
    <script src="/lib/jquery-ui.min.js"></script>

   

  </head>
  <body>

    <header>

      <div class="login" >
        <ul>
          <li><a href="/login.php">Login</a></li>
          <li><a href="/registration_user.php">Sign Up</a></li>
        </ul>
      </div>
      
      <h1><a href="/index.php">My Restaurant Site</a></h1>

      <div class="menu" >
        <ul>
          <li>Home</li>
          <li>About me</li>
          <li>Restaurants</li>
        </ul>
      </div>
      
      <form action="/show_users.php" method="post">
          <input name="username" type="text" placeholder="Search..">
      </form>

    </header>
    

  