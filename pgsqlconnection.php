<?php

$db = pg_connect("host=localhost port=5432 dbname=student user=postgres password=Shweta@1700");

if ($db) {

echo 'Connection attempt succeeded.';

} else {

echo 'Connection attempt failed.';

}

?>
