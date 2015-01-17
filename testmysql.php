<?php 
$link = new mysqli('locahost','ghandi','Su7aPh0ne','RPG'); 
if ($link->connect_error) { 
	die('Could not connect to MySQL: ' . $link->connect_error); 
} 
echo 'Connection OK'; 

$link->close(); 
?> 