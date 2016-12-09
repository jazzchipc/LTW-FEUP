<?php
    include($_SERVER['DOCUMENT_ROOT'].'/templates/html_header.html');
    include_once($_SERVER['DOCUMENT_ROOT'].'/database/review.php');
?>

<h2> Write a review </h2>

<form action ="save_review.php" method ="post" id ="review_form">

    <div id="title">
        <label>Title
        <input type="text" name="title" required>
        </label>
    </div>

    <div id="score">
        <label>Score
        <label><input type="radio" name="score" value="1" required>1</label>
        <label><input type="radio" name="score" value="2" required>2</label>
        <label><input type="radio" name="score" value="3" required>3</label>
        <label><input type="radio" name="score" value="4" required>4</label>
        <label><input type="radio" name="score" value="5" required>5</label>
        </label>
    </div>

    <div id="review">
        <label>Review
        <textarea name="review" required></textarea>
        </label>
    </div>
    <div>
        <input type="submit" value="Submit">
    </div>

</form>

<?php
    include($_SERVER['DOCUMENT_ROOT'].'/templates/html_footer.html');  
?>