<?php

    include('../templates/header.php'); 

?>



<form action ="" method ="post" id ="reply_form">

    <div id="restaurant_information">
        <div><label>Name</label>
        <input type="text" name="restaurant_name" required></input></div>

        <div><label>Description</label>
        <textarea name="restaurant_description" required></textarea></div>
        
    </div>

    <div>
        <input type="submit" value="Add Restaurant">
    </div>

</form>


<?php

    include('../templates/footer.php');

?>