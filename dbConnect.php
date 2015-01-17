<?php
$dbHost = 'localhost';
$dbUser = 'ghandi';
$dbPass = 'Su7aPh0ne';
$dbDB = 'RPG';

//mysqli_connect takes db host, username, password, and db name to connect to mysql on the server
$db = new mysqli($dbHost,$dbUser,$dbPass, $dbDB)or die("Error connecting to database.");
?>
