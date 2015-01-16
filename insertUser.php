<?php
require "functions.php";
require "dbConnect.php";

if ($_POST["NewUPass"] != $_POST["NewUPassConf"]){
    die('Passwords do not match');
}

$NewUsername= mysql_real-escape_string(testFormData($_Post['NewUsername']));
$NewUPass= hash('sha256', mysql_real_escape_string(testFormData($_POST["NewUPass"])));
$

$sqlIns= 'INSERT INTO users' . ('',');