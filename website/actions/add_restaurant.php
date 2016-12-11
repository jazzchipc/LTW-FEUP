<?php

    include('../templates/header.php'); 

?>



<form action ="" method ="post" id ="reply_form">

    <div id="restaurant_information">
        <label>Name</label>
        <input type="text" name="restaurant_name" required></textarea>
        
    </div>

    <div>
        <input type="submit" value="Add Restaurant">
    </div>

</form>


<?php

    include('../templates/footer.php');

?>