<?php
include("Connectdb.php");
   $sql =<<<EOF
   SELECT id,name FROM COMPANY1 ORDER BY NAME FETCH FIRST 2 ROWS ONLY  ;
EOF;

   $ret = pg_query($db, $sql);
   
   while($row = pg_fetch_row($ret)) {
    echo  "$row[0]  $row[1] ";
    echo "<br>";
}
   
   echo "Operation done successfully<br>";
   pg_close($db);
?>

