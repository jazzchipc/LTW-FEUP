<?php

    session_start();

    $username = $_POST["username"];
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $captcha = $_POST["captcha"];
    
    if($captcha != $_SESSION['captcha']['code'])
    {
        echo '<script> alert("Bad captcha. Please try again.") </script>';
        header('refresh:0; url=/registration_user.php');
        die;
    }

    include_once($_SERVER['DOCUMENT_ROOT'].'/database/connection.php');
    include_once($_SERVER['DOCUMENT_ROOT'].'/database/user.php');

    if(isset($_POST['photo'])){
        include_once($_SERVER['DOCUMENT_ROOT'].'/upload_file.php');
        $photo = '/resources/img/uploads/users/'. $photo_name;
    }

    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);

    if(userExists($dbh, $username, $email) == false){
        $stmt = $dbh->prepare('INSERT INTO User(user_name, first_name, last_name, email, photo_url, password)
                                VALUES (?, ?, ?, ?, ?, ?)');
        $stmt->execute(array($username, $firstname, $lastname, $email, $photo, $hashedPassword));

        echo '<script> alert("New user added. Check your email.") </script>';

        // Send verification email
        if(0)
        {
            ini_set('SMTP', 'smtp-mail.outlook.com');

            require $_SERVER['DOCUMENT_ROOT'].'/vendors/php-mailer/PHPMailerAutoload.php';

            $mail = new PHPMailer;

            $mail->SMTPDebug = 3;                               // Enable verbose debug output

            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = 'smtp.sapo.pt';                  // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = 'food_corner_ltw@sapo.pt';                        // SMTP username
            $mail->Password = 'final_project';                                  // SMTP password
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = 587;                                    // TCP port to connect to

            $mail->setFrom('food_corner_ltw@sapo.pt', 'Food Corner');
            $mail->addAddress($email, $firstname.$lastname);     // Add a recipient

            $mail->isHTML(true);                                  // Set email format to HTML

            $mail->Subject = 'Thank you for your Food Corner registration';
            $mail->Body    = 'Welcome to out website!';
            $mail->AltBody = 'Welcome to out website!';

            if(!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo 'Message has been sent';
            }
        }

    }

    else{
        echo '<script> alert("User already exists.") </script>';
        header('refresh:2; url=/registration_user.php');
    } 

?>
