<?php
include('templates/html_header.html');
?>

<h2> Write a review </h2>

<form action ="" id ="review_form">

    <div id="title">
        Title
        <input type="text" name="title" required>
    </div>

    <div id="score">
        Score
        <label><input type="radio" name="score" value="1" required>1</label>
        <label><input type="radio" name="score" value="2" required>2</label>
        <label><input type="radio" name="score" value="3" required>3</label>
        <label><input type="radio" name="score" value="4" required>4</label>
        <label><input type="radio" name="score" value="5" required>5</label>
    </div>

    <div id="review">
        Review
        <input type="text" name="review" required>

    </div>

</form>

<?php
include('templates/html_footer.html');
?>