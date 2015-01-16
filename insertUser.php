<?php
require "functions.php";
require "dbConnect.php";

if ($_POST["NewUPass"] != $_POST["NewUPassConf"]){
    die('Passwords do not match');
}
<<<<<<< Updated upstream
<<<<<<< Updated upstream
=======
=======

$NewUsername = mysql_real-escape_string(testFormData($_Post['NewUsername']));
$NewUPass = hash('sha256', mysql_real_escape_string(testFormData($_POST["NewUPass"])));
$NewUFirst = mysql_real-escape_string(testFormData($_Post['NewUFirst']));
$NewULast = mysql_real-escape_string(testFormData($_Post['$NewULast']));
$NewUBirth = mysql_real-escape_string(testFormData($_Post['NewUBirth']));

$sqlIns= 'INSERT INTO users ' .
    "(id, username, password, firstName, lastName, bDate)" .
    "Values ('', '$NewUsername', '$NewUPass', '$NewUFirst', '$NewULast', '$NewUBirth')";
    
>>>>>>> Stashed changes

$NewUsername = mysql_real-escape_string(testFormData($_Post['NewUsername']));
$NewUPass = hash('sha256', mysql_real_escape_string(testFormData($_POST["NewUPass"])));
$NewUFirst = mysql_real-escape_string(testFormData($_Post['NewUFirst']));
$NewULast = mysql_real-escape_string(testFormData($_Post['$NewULast']));
$NewUBirth = mysql_real-escape_string(testFormData($_Post['NewUBirth']));

$sqlIns= 'INSERT INTO users ' .
    "(id, username, password, firstName, lastName, bDate)" .
    "Values ('', '$NewUsername', '$NewUPass', '$NewUFirst', '$NewULast', '$NewUBirth')";
    
>>>>>>> Stashed changes

$NewUsername= mysql_real-escape_string(testFormData($_Post['NewUsername']));
$NewUPass= hash('sha256', mysql_real_escape_string(testFormData($_POST["NewUPass"])));
$

$sqlIns= 'INSERT INTO users' . ('',');
