<?php
    include($_SERVER['DOCUMENT_ROOT'].'/templates/header.php');
    include($_SERVER['DOCUMENT_ROOT'].'/templates/restrict_access.php');
?>

<h1> Write a review </h1>

<form action ="/actions/save_review.php" method ="post" id ="review_form">

    <input type="hidden" name="restaurant_id" value="<?php echo $_GET['restaurant_id']?>" />
    <input type="hidden" name="reviewer_id" value="<?= $_SESSION['user_id']?>" />

    <div id="title">
        <label>Title</label>
        <input type="text" name="title" autocomplete="off" required>
        
    </div>

    <div id="score">
        <label>Score</label>
        <div class="radio_button"><input type="radio" name="score" value="1" required>1</div>
        <div class="radio_button"><input type="radio" name="score" value="2" required>2</div>
        <div class="radio_button"><input type="radio" name="score" value="3" required>3</div>
        <div class="radio_button"><input type="radio" name="score" value="4" required>4</div>
        <div class="radio_button"><input type="radio" name="score" value="5" required>5</div>
       
    </div>

    <div id="review">
        <label>Review</label>
        <textarea name="review" required></textarea>
        
    </div>
    <div>
        <input type="submit" value="Submit">
    </div>

</form>

<?php
    include($_SERVER['DOCUMENT_ROOT'].'/templates/footer.php');  
?>