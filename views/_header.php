<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>php-login-advanced</title>
	<link rel="stylesheet" type="text/css" href="css/stylesheet.css">
	
</head>
<body>
<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    foreach ($login->errors as $error) {
        echo "<span class=\"login_error\">$error</span><br/>\n";
    }

    foreach ($login->messages as $message) {
        echo "<span class=\"login_message\">$message</span><br/>\n";
    }
}
?>
