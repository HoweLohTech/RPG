<?php
require "functions.php";
require "dbConnect.php";

if ($_POST["NewUPass"] != $_POST["NewUPassConf"]){
    die('Passwords do not match');
}

$NewUsername = testFormData($_Post["NewUsername"]);
$NewUPass = hash('sha256', testFormData($_POST["NewUPass"]));
$NewUFirst = testFormData($_Post["NewUFirst"]);
$NewULast = testFormData($_Post["NewULast"]);
$NewUBirth = testFormData($_Post["NewUBirth"]);

$sql= 'INSERT INTO Users ' .
    "(id, username, password, firstName, lastName, bDate)" .
    "Values ('', '$NewUsername', '$NewUPass', '$NewUFirst', '$NewULast', '$NewUBirth')";
    
$insert= mysqli_query($sql);

if (!$insert){
    die ("Erroneous:" . mysql_error());
}

echo "Congratz, Bruh (or Sis)!!" . "<br>" .
        "Welcome to the HoweLoh Fam!!" . "<br>" . 
        "<a href='index.php'> Return to Main Page </a>";

mysqli_close($db);
?>