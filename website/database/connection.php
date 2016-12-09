<!-- Establish connection to database -->

<?php
  try {
     $dbh = new PDO('sqlite:'.$_SERVER['DOCUMENT_ROOT'].'/database/sqlite/db');
     $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);  # o array é indexado pelo NOME da coluna
     $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);       # permite que um erro seja detetado
  } catch (PDOException $e) {
     die($e->getMessage()); # die == terminar processo
  }
?>
