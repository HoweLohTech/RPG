<!DOCTYPE html>
<html>
<head>
	<link href="bootstrap-3.3.1-dist\dist\css\bootstrap.css" rel="stylesheet"/>
	<link href="dungeonstyle.css" rel="stylesheet"/>
	<link rel="shortcut icon" href="favicon.ico"/>
	<title>Home Page</title>
</head>
<body>
    <form action="insertUser.php" method="post">
        Username: <input class="NewUBox" type="text" name="NewUsername">
        Password: <input class="NewUBox" type="text" name="NewUPass">
        Confirm Password: <input class="NewUBox" type="text" name="NewUPassConf">
        First Name: <input class="NewUBox" type="text" name="NewUFirst">
        Last Name: <input class="NewUBox" type="text" name="NewULast">
        Birthday: <input class="NewUBox" type="text" name="NewUBirth">
        <input type="submit">
    </form>
</body>