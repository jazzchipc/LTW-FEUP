<?php
    
    $target_dir = $_SERVER['DOCUMENT_ROOT'].'/resources/img/uploads/users/';
    $photo_name =  basename($_FILES["photo"]["name"]);
    $target_file = $target_dir . $photo_name;
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
         
        $check = getimagesize($_FILES["photo"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
        
    // Check if file already exists
    if (file_exists($target_file)) {
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["photo"]["size"] > 500000) {
        echo '<script> alert("Sorry, your file is too large.") </script>';
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
        echo '<script> alert("Sorry, only JPG, JPEG, PNG & GIF files are allowed.") </script>';
        $uploadOk = 0;
    }

    if ($_FILES["photo"]["error"] > 0) {
        echo '<script> alert("Error: " . $_FILES["photo"]["error"] . "<br />") </script>';
        $uploadOk = 0;
    } 

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo '<script> alert("Sorry, your file was not uploaded.") </script>';
    // if everything is ok, try to upload file
    } 
    else {
        if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
            echo '<script> alert("The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.") </script>';
        } else {
            echo '<script> alert("Sorry, there was an error uploading your file.") </script>';
        }
    }

    /**
    *
    * string mime_content_type ( string $filename ) 
    * 
    * Returns the MIME content type for a file as determined by using * * * * * * information from the magic.mime file
    *
    * Example:
    *
    * <?php
    * echo mime_content_type('php.gif') . "\n";
    * echo mime_content_type('test.php');
    * ?>
    *
    * Returns:
    * 
    * image/gif
    * text/plain
    */


?>


