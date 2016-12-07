<?php
include('templates/html_header.html');
 
include_once('database/connection.php');

try {
    $stmt = $dbh->prepare('SELECT * FROM Review');
    $stmt->execute();  

    $reviews = $stmt->fetchAll();

} catch (PDOException $e) {
    echo $e->getMessage();
}
 
include('templates/review_show.php');

 ?>



<?php
include('templates/html_footer.html');
?>