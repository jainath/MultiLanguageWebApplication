<!DOCTYPE html>
<html>

<head>
	<!-- HTML 5 -->
    <meta charset="UTF-8">
    <!-- HTML 4.01 -->
    <!-- <meta http-equiv="content-type" content="text/html; charset=UTF-8"> -->
    <meta name="author" content="Jainath Ponnala">
    <title>Multi language - Example</title>
</head>
<body>
	<?php

		// New connection
		$mysqli = new mysqli("localhost", "root", "abc123", "test");

		 // check connection 
		if ($mysqli->connect_errno) {
		    printf("Connect failed: %s\n", $mysqli->connect_error);
		    exit();
		}

		// Set charset
		$mysqli->set_charset("utf8");

		// Query
		$query = "SELECT `title` FROM `greetings`";

		if ($result = $mysqli->query($query)) {

		     // fetch associative array 
		    while ($row = $result->fetch_assoc()) {
		        echo "<p>".$row["title"] . "</p>";
		    }

		     // free result set 
		    $result->free();
		}

		 // close connection 
		$mysqli->close();
	?> 

</body>

</html>