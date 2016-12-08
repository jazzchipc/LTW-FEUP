<?php

    //if (!isset($_POST['id'])) die('No id');
    if (!isset($_POST['reply_comment']) || trim($_POST['reply_comment']) == '') die('Title is mandatory');

    include("database/reply.php");
    include("database/connection.php");

    try 
    {
        addReply($dbh, $_POST['review_id'], $_POST['user_id'], $_POST[parent_id], $_POST[reply_comment]);
    } 
    catch (PDOException $e) 
    {
        die($e->getMessage());
    }

    $review_path = "Location: /show_replies.php?review_id=" . $_POST['review_id'];

    header($review_path);
?>