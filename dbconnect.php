<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "activitylog";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
if(!$conn){
	echo "cannot connect to the database";
	exit;
}