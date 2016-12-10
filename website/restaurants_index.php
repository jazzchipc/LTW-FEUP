<?php
  include('templates/html_header.html'); 
?>

<h1>Restaurant Index</h1>

<?php 

include('database/connection.php');

try {
    // ONLY prepares
    $stmt = $dbh->prepare('SELECT * FROM Restaurant');
   
    // public bool PDOStatement::execute ([ array $input_parameters ] ) 
    // EXECUTES THE PREPARED STATEMENT. The array of input parameters is optional and restructs the solution
    $stmt->execute();  

    while ($row = $stmt->fetch()) {
      var_dump($row);
      echo "<br>";
    }

    /*** var_dump vs echo vs print_r ***/
    /* 
    
    - var_dump: shows all the information of a variable, independently of its type
    - echo: prints ONE or more strings
    - print_r: less useful than var_dump

    http://stackoverflow.com/questions/1647322/whats-the-difference-between-echo-print-and-print-r-in-php
    */

} catch (PDOException $e) {
    echo $e->getMessage();
}
?>

<?php
  include('templates/html_footer.html');
?>