<?php

$DB_HOST = getenv("DB_HOST");
$DB_USER = getenv("DB_USERNAME");
$DB_PASS = getenv("DB_PASSWORD");
$DB_DB = getenv("DB_NAME");

$conect =  mysqli_connect($DB_HOST,$DB_USER,$DB_PASS,$DB_DB);

?>