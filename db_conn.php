<?php

// Create connection

// $dbhost = 'localhost:3036';
$dbhost = 'localhost';
$dbuser = 'cl19-demo-ukw';
$dbpass = 'j.6skjtHz';
$dbname = 'cl19-demo-ukw';

$con=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

// Check connection
if (mysqli_connect_errno($con))
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
  }
 else {
	// DEBUG - REMOVED THIS AS IT WAS CAUSING CLASHES WITH HEADER();
	// echo "<!-- DB Connection Successful. -->\n";	
	}

?>