<?php
    include($_SERVER['DOCUMENT_ROOT'].'/templates/header.php');
    include_once($_SERVER['DOCUMENT_ROOT'].'/database/review.php');
?>

<h1> Write a review </h1>

<form action ="save_review.php" method ="post" id ="review_form">

    <div id="title">
        <label>Title</label>
        <input type="text" name="title" required>
        
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