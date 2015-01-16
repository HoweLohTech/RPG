<?php 
require 'functions.php';
require 'dbConnect.php';
$username = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$username = mysql_real_escape_string(testFormData($_POST["username"]));
	$password = hash('sha256', mysql_real_escape_string(testFormData($_POST["password"])));
}

echo "Username: " . $username . "<br>" . "Password: " . $password;

mysql_close($db);
?>
