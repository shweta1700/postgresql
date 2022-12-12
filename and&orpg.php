<?php
include("pgsqlconnection.php");
$sql =<<<EOF
SELECT id,name
FROM employee
WHERE id=98

UNION

SELECT id,name
FROM company
where id=5;
EOF;



   $ret = pg_query($db, $sql);
   if(!$ret) {
      echo pg_last_error($db);
      exit;
   } 
   while($row = pg_fetch_row($ret))
    {
    echo "$row[0] $row[1] $row[2] $row[3] $row[4]";
    echo "\n";
    }
   echo "\nOperation done successfully\n";
   pg_close($db);
<<<EOF
   
EOF;
?>