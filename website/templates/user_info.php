
<section id="users_info">
  <article>

    <!--<form action="/templates/user_info.php" method="post">-->
        <label>Username<input name="username" type="text" value="<?= $user['user_name']?>" readonly="true"></label>
        <label>Email <input name="email" type="email" value="<?= $user['email'] ?>" readonly="true"></label>
        <label>Password <input name="password" type="password" value="<?= $user['password'] ?>" readonly="true"></label>
        <input type="submit" value="Edit">

    <!--</form-->

  </article>
</section>
