<?php
	include('dbConnect.php');
	session_start();// Starting Session
	
	// Storing Session
	$user_check=$_SESSION['loginUser'];
	
	// SQL Query To Fetch Complete Information Of User
	$result = $mysqli->query("select name from users where name='$user_check'");
	$row = $result->fetch_assoc();
	$login_session =$row['name'];
	
	$mysqli->close(); // Closing Connection
?>