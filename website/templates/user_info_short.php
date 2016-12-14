

<div class="user_info_short">

    <form action="../views/user_account.php" method="post">

        <img src="..<?= $user['photo_url'] ?>" alt="Profile Photo" width=200 height=200>

        <div class="user_name">
            <label><?= $user['first_name']?></label>

            <label><?= $user['last_name']?></label>
        </div>

        <label><?= $user['user_name']?></label>
        <input name="username" id="username" type="hidden" value="<?= $user['user_name']?>" readonly="true">

        <label><?= $user['email']?></label>

        <input id="see_more" type="submit" value="See More">
    </form>

</div>

