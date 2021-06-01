<?php
$conn_string = "host=ec2-107-21-10-179.compute-1.amazonaws.com"
        . " port=5432 "
        . "dbname=d92olh7hrskci1"
        . " user=hjjarilyjduhjh"
        . " password=a2fbc747033b41f79f6ca7a4475a3745c383370abfcf0849ee56c33f345a9880";
$db = pg_connect($conn_string);
//connect to a database named "test" on the host "sheep" with a username and password
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully Nguyen \n";
   }
?>