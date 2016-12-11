
<div class="users_info">

    <form action="/edit_user_info.php" method="post">

        <label>Username</label>
        <input name="username" type="text" value="<?= $user['user_name']?>" readonly="true">

        <label>First Name</label>
        <input name="firstname" type="text" value="<?= $user['first_name']?>" readonly="true">

        <label>Last Name</label>
        <input name="lastname" type="text" value="<?= $user['last_name']?>" readonly="true">

        <label>Email</label>
        <input name="email" type="email" value="<?= $user['email'] ?>" readonly="true">
        
        <label>Photo</label>
        <img src="<?= $user['photo_url'] ?>" alt="Profile Photo" width=200 height=200>
        <?=$user['photo_url'] ?>
        <label>Password</label>
        <input name="password" type="password" value="<?= $user['password'] ?>" readonly="true">

        <input type="submit" value="Edit">

    </form>

</div>
