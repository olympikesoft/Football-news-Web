<?php
session_start();

define("BASE_URL", "http://localhost/LikeReaction/");

	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$db = 'news';

	// Create connection
	$link = mysqli_connect($servername, $username, $password,$db);

	// Check connection
	if (!$link)
	{
	    die("Connection failed: " . mysqli_connect_error());
	}
	//echo "Connected successfully";
	

?>