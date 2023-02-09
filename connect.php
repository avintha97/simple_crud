<?php

// $con = new mysqli("localhost","root","avintha97",'simple_crud');

// if(!$con){
//     die(mysqli_error($con));
// }

?>

<?php
   $host        = "127.0.0.1";
   $port        = "5432";
   $dbname      = "simple_crud";
   $credentials = "avintha97";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }
?>