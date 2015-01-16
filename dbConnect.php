<?php
$dbHost = 'mysql.sercureserver.net';
$dbUser = 'ghandi';
$dbPass = 'Su7aPh0ne';
$dbDB = 'RPG';

//mysql_connect takes db host, username, and password to connect to mysql on the server
$db = mysql_connect($dbHost,$dbUser,$dbPass)or die("Error connecting to database.");

//mysql_select_db selects the db to be used
mysql_select_db($dbDB, $db)or die("Error Selecting the Database")
?>
