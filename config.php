<?php 
	session_start();

	// connect to database
    $conn = mysqli_connect("localhost", "quesnitc_java", "quesnitc_java", "quesnitc_java");

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}
       // coming soon...

	define ('ROOT_PATH', realpath(dirname(__FILE__)));
	define('BASE_URL', 'https://java.quesnit.com/');
?>