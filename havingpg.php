<?php
include("pgsqlconnection.php");
$sql =<<<EOF
SELECT id,name,age
FROM company
WHERE name='Paul'
GROUP BY id
HAVING sum(id)<2
ORDER BY id,name,age;
EOF;



   $ret = pg_query($db, $sql);
   if(!$ret) {
      echo pg_last_error($db);
      exit;
   } 
   while($row = pg_fetch_row($ret))
    {
        echo "ID = ". $row[0] . "\n";
        echo "NAME = ". $row[1] ."\n";
        echo "AGE = ". $row[2] ."\n";
        
    }
   echo "Operation done successfully\n";
   pg_close($db);
<<<EOF
   
EOF;
?>