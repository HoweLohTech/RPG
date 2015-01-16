<?php
require "functions.php";
require "dbConnect.php";

if ($_POST["NewUPass"] != $_POST["NewUPassConf"]){
    die('Passwords do not match');
}

$NewUsername = mysql_real_escape_string(testFormData($_Post['NewUsername']));
$NewUPass = hash('sha256', mysql_real_escape_string(testFormData($_POST["NewUPass"])));
$NewUFirst = mysql_real_escape_string(testFormData($_Post['NewUFirst']));
$NewULast = mysql_real_escape_string(testFormData($_Post['$NewULast']));
$NewUBirth = mysql_real_escape_string(testFormData($_Post['NewUBirth']));

$sql= 'INSERT INTO users ' .
    "(id, username, password, firstName, lastName, bDate)" .
    "Values ('', '$NewUsername', '$NewUPass', '$NewUFirst', '$NewULast', '$NewUBirth')";
    
$insert= mysql_query($sql);

if (!$insert){
    die ("Erroneous:" . mysql_error());
}

echo "Congratz, Bruh (or Sis)!!" . "<br>" .
        "Welcome to the HoweLoh Fam!!" . "<br>" . 
        "<a href='index.php'> Return to Main Page </a>";

mysql_close($db);
?>