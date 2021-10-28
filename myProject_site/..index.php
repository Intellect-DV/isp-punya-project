<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	
	//create connection
	$conn = new MySQLi($servername, $username, $password);
	
	//check connection
	if ($conn->connect_error) {
		die("Connection failed:". $conn->connect_error);
	} 
	
	echo "Connected successfully";
	?>
	
</body>
</html>
