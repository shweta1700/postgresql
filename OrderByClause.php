<?php
include("Connectdb.php");
   $sql =<<<EOF
      SELECT * from COMPANY1 ORDER BY NAME ASC;
EOF;

   $ret = pg_query($db, $sql);
   if(!$ret) {
      echo pg_last_error($db);
      exit;
   } 
   while($row = pg_fetch_row($ret)) {

      echo  "$row[0]  $row[1] $row[2] $row[3] $row[2]";
      echo "<br>";

   }
   echo "Operation done successfully<br>";
   pg_close($db);
?>

