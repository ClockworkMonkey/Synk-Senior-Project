<?php
	define('HOST','localhost');
	define('USER','root');
	define('PASS','');
	define('DB','synk-app');
	
	//adds a new user to teh database, first checking if the 
	// username/email is alreadty in use
	 
	$con = mysqli_connect(HOST,USER,PASS,DB);
	 
	$username = $_POST['username'];
	$password = $_POST['password'];
	$name = $_POST['name'];
	 

	$stmt = "INSERT INTO users(name, username, password, prefernces) VALUES('$name', '$username', '$password', 'No preferences set')";
	$stmt2 = "INSERT INTO schedules(username) VALUES('$username')";
	
	$sql2 = mysqli_query($con, $stmt);
	$sql3 = mysqli_query($con, $stmt2);

	if(!$sql2)
	{
		echo "false";
	}
	else
	{
		echo "true";		
	}
	 
	mysqli_close($con);
?>