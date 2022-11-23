<?php


getenv('MYSQL_DBHOST') ? $db_host=getenv('MYSQL_DBHOST') : $servername="localhost";
getenv('MYSQL_DBPORT') ? $db_port=getenv('MYSQL_DBPORT') : $db_port="3306";
getenv('MYSQL_DBUSER') ? $db_user=getenv('MYSQL_DBUSER') : $username="root";
getenv('MYSQL_DBPASS') ? $db_pass=getenv('MYSQL_DBPASS') : $password="Pass@123";
getenv('MYSQL_DBNAME') ? $db_name=getenv('MYSQL_DBNAME') : $database="php_crud";


//$servername = "localhost";
//$username = "root";
//$password = "Pass@123";
//$database = "php_crud";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);


// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
  echo "Connected successfully";

// echo "Reached here";


?>
