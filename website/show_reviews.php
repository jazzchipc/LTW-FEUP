<?php
include('templates/html_header.html');
 
include('database/connection.php');

try {
    $stmt = $dbh->prepare('SELECT * FROM Review');
    $stmt->execute();  

    while ($row = $stmt->fetch()) {
      var_dump($row);
      echo "<br>";
    }

} catch (PDOException $e) {
    echo $e->getMessage();
}
 
 ?>



<?php
include('templates/html_footer.html');
?>