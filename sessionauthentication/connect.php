<?php 
$serverName ="localhost";
$username = "root";
$password = "";
$database = "dbsunkoshi";
//create connection
$conn = mysqli_connect($serverName,$username,$password,$database);

//check connection
if (!$conn) {
	die("Could not connect." . mysqli_connect_error());
	}
