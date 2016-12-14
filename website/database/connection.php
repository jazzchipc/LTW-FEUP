<?php
  try {
    $dbh = new PDO('sqlite:../db');
    #OR
    #$dbh = new PDO('sqlite:database/sqlite/db');  # absolute path from webroot. Using '/' does not work, so no need for that.
    #OR
    #$dbh = new PDO('sqlite:'.__DIR__.'/sqlite/db');  # .__DIR__. is the directory of the current file
    $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);  # o array é indexado pelo NOME da coluna
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);       # permite que um erro seja detetado
  } catch (PDOException $e) {
    die($e->getMessage()); # die == terminar processo
  }
?>
