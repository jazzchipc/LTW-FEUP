<!-- Establish connection to database -->

<?php
  try {
     $dbh = new PDO('sqlite:'.__DIR__.'/sqlite/db');
     $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);  # o array é indexado pelo NOME da coluna
     $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);       # permite que um erro seja detetado
  } catch (PDOException $e) {
     die($e->getMessage()); # die == terminar processo
  }
?>
