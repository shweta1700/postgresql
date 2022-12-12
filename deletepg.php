<?php
include("pgsqlconnection.php");
$sql =<<<EOF
      DELETE from COMPANY where ID=3;
EOF;
   $ret = pg_query($db, $sql);
   if(!$ret) {
      echo pg_last_error($db);
      exit;
   } else {
      echo "Record deleted successfully\n";
   }
   
   $sql =<<<EOF
      SELECT * from COMPANY;
EOF;

   $ret = pg_query($db, $sql);
   if(!$ret) {
      echo pg_last_error($db);
      exit;
   } 
   while($row = pg_fetch_row($ret)) {
      echo "ID = ". $row[0] . "\n";
      echo "NAME = ". $row[1] ."\n";
      echo "AGE = ". $row[2] ."\n";
      echo "ADDRESS = ". $row[3] ."\n";
      echo "SALARY =  ".$row[4] ."\n\n";
   }
   echo "Operation done successfully\n";
   pg_close($db);
?>