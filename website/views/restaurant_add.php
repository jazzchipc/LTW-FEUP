<?php

    include($_SERVER['DOCUMENT_ROOT'].'/templates/restrict_access.php');
    include($_SERVER['DOCUMENT_ROOT'].'/templates/header.php'); 

?>



<script>
// Hours spinner OPEN
  $( function() {
    $( "#spinner_hours_open" ).spinner({
      spin: function( event, ui ) {
        if ( ui.value > 24 ) {
          $( this ).spinner( "value", 0 );
          return false;
        } else if ( ui.value < 0 ) {
          $( this ).spinner( "value", 24 );
          return false;
        }
      }
    }).val(8);
  } );

// Minutes spinner OPEN
    $( function() {
        $( "#spinner_minutes_open" ).spinner({
            spin: function( event, ui ) {
            if ( ui.value > 60 ) {
                $( this ).spinner( "value", 0 );
                return false;
            } else if ( ui.value < 0 ) {
                $( this ).spinner( "value", 60 );
                return false;
            }
            }
        }).val(00);;
    });

// Hours spinner CLOSE
  $( function() {
    $( "#spinner_hours_close" ).spinner({
      spin: function( event, ui ) {
        if ( ui.value > 24 ) {
          $( this ).spinner( "value", 0 );
          return false;
        } else if ( ui.value < 0 ) {
          $( this ).spinner( "value", 24 );
          return false;
        }
      }
    }).val(20);
  } );

// Minutes spinner CLOSE
    $( function() {
        $( "#spinner_minutes_close" ).spinner({
            spin: function( event, ui ) {
            if ( ui.value > 60 ) {
                $( this ).spinner( "value", 0 );
                return false;
            } else if ( ui.value < 0 ) {
                $( this ).spinner( "value", 60 );
                return false;
            }
            }
        }).val(00);;
    });

</script>

<form action ="/actions/save_restaurant.php" method ="post" id ="restaurant_form" enctype="multipart/form-data">

    <input type="hidden" name="user_id" value="<?= $_SESSION['user_id']?>" />

    <div id="restaurant_information">
        <div><label>Name</label>
        <input type="text" name="restaurant_name" required></input></div>

        <div><label>Description</label>
        <textarea name="restaurant_description" required></textarea></div>

        <div><label>Image</label>
        <input type="file" name="restaurant_image"></input></div>

        <div>
            <label for="spinner">Open time:</label>
            <input class="spinner_jquery" id="spinner_hours_open" name="hours">h<input id="spinner_minutes_open"  class="spinner_jquery" name="minutes">min
            <label for="spinner">Close time:</label>
            <input class="spinner_jquery" id="spinner_hours_close" name="hours">h<input id="spinner_minutes_close"  class="spinner_jquery" name="minutes">min
        </div>
        
    </div>

    <div>
        <input type="submit" value="Add Restaurant">
    </div>

</form>


<?php

    include('../templates/footer.php');

?>