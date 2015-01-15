<?php
/* this file is inteded to create a list of function that may be used in multiple locations
Current functions: Form Verification*/

function testFormData($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>
