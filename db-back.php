<?php

$servername = "localhost";
$username = "root";
$password = "Pass@123";
$database = "php_crud";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);


// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";

// echo "Reached here";


?>
