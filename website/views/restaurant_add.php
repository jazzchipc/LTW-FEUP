<?php

    include($_SERVER['DOCUMENT_ROOT'].'/templates/header.php');
    include($_SERVER['DOCUMENT_ROOT'].'/templates/restrict_access.php'); 

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

<form enctype="multipart/form-data" action ="/actions/save_restaurant.php" method ="post" id ="restaurant_form" enctype="multipart/form-data">

    <input type="hidden" name="user_id" value="<?= $_SESSION['user_id']?>" />

    <div id="restaurant_information">
        <div><label>Name</label>
        <input type="text" name="restaurant_name" required></input></div>

        <div><label>Description</label>
        <textarea name="restaurant_description" required></textarea></div>

        <div>
            <label>Image</label>
            <input type="hidden" name="MAX_FILE_SIZE" value="500000" />
            <input name="restaurant_photo" id="restaurant_photo" type="file" accept="image/*" required></input>
        </div>

        <div>
            <label for="spinner">Open time:</label>
            <input class="spinner_jquery" id="spinner_hours_open" name="open_hours">h<input id="spinner_minutes_open"  class="spinner_jquery" name="open_minutes">min
            <label for="spinner">Close time:</label>
            <input class="spinner_jquery" id="spinner_hours_close" name="close_hours">h<input id="spinner_minutes_close"  class="spinner_jquery" name="close_minutes">min
        </div>
        
    </div>

    <div>
        <input type="submit" value="Add Restaurant">
    </div>

</form>


<?php

    include('../templates/footer.php');

?>