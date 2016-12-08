<?php # http://stackoverflow.com/questions/4057947/multi-tiered-comment-replies-display-and-storage

function addReply($dbh, $review_id, $user_id, $parent_id, $reply_comment)
{
    try
    {
        $stmt = $dbh->prepare('INSERT INTO Reply (review_id, user_id, parent_id, reply_comment) values (?, ?, ?, ?)');
        $stmt->execute(array($review_id, $user_id, $parent_id, $reply_comment));
    }

    catch (PDOException $e) 
    {
        echo $e->getMessage();
    }

    return intval($dbh->lastInsertId());    // get ID of added record
}

function getAllReplies($dbh)
{
    try 
    {
        $stmt = $dbh->prepare('SELECT * FROM Review');
        $stmt->execute();  

        $reviews = $stmt->fetchAll();
    } 
    catch (PDOException $e) 
    {
        echo $e->getMessage();
    }

    return $reviews;
}

function getAllReviewReplies($dbh, $review_id)
{
    try 
    {
        $stmt = $dbh->prepare('SELECT * FROM Reply WHERE review_id = ?');
        $stmt->execute(array($review_id));  

        $repliesToReview = $stmt->fetchAll();
    } 
    catch (PDOException $e) 
    {
        echo $e->getMessage();
    }

    return $repliesToReview;
}

?>