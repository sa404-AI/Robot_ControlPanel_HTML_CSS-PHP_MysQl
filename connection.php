<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "task_3";


// Create connection
$mysqli =  mysqli_connect($servername, $username, $password,$db);

// Check connection
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}
?>