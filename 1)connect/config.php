<?php
   $host        = "host = localhost";
   $port        = "port = 5432";
   $dbname      = "dbname = pos";
   $credentials = "user = postgres password=1234";

   $db = pg_connect( "$host $port $dbname $credentials"  );
   if(!$db) {
      echo "Error : Unable to open database\n";
   } else {
      echo "Opened database successfully\n";
   }

    $sql =<<<EOF
    select * from teacher;
    EOF;

    $ret = pg_query($db, $sql);
    while($row = pg_fetch_row($ret)) {
      echo "ID = ". $row[0] . "\n";
      echo "NAME = ". $row[1] ."\n";
      echo "ADDRESS = ". $row[2] ."\n";
      echo "SALARY =  ".$row[4] ."\n\n";
   }
 
   pg_close($db);



?>