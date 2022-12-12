<?php
include("Connectdb.php");
   $sql =<<<EOF
      SELECT customer.customername,orderss.orderid FROM customer LEFT JOIN orderss ON customer.customerid=orderss.customerid;
EOF;

   $ret = pg_query($db, $sql);
   if(!$ret) {
      echo pg_last_error($db);
      exit;
   } 
   while($row = pg_fetch_row($ret)) {
    echo " $row[0]  $row[1]   ";
    echo "\n";
 
   }
   echo "Operation done successfully<br>";
   pg_close($db);
?>