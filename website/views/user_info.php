
<div class="user_info">

    <form action="/edit_user_info.php" method="post">
        <img src="<?= $user['photo_url'] ?>" alt="Profile Photo" width=200 height=200>

        <div class="user_name">
            <label><?= $user['first_name']?></label>
            <input name="firstname" type="hidden" value="<?= $user['first_name']?>" readonly="true">

            <label><?= $user['last_name']?></label>
            <input name="lastname" type="hidden" value="<?= $user['last_name']?>" readonly="true">
        </div>

        <label><?= $user['user_name']?></label>
        <input name="username" id="username" type="hidden" value="<?= $user['user_name']?>" readonly="true">

        <label><?= $user['email']?></label>
        <input name="email" type="hidden" value="<?= $user['email'] ?>" readonly="true">

        <input name="password" type="hidden" value="<?= $user['password'] ?>" readonly="true">

        <input id="edit" type="submit" value="Edit" style="visibility:hidden">
        
    </form>

    <script>
        var session_user = "<?php echo $_SESSION['user_name']; ?>";
        var user = "<?php echo $user['user_name']; ?>";
        if (session_user == user){ 
            document.getElementById("edit").style.visibility="visible";
        }
    </script>

</div>
