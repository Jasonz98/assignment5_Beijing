<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'inclass11');
define('DB_PASSWORD', 'inclass11');
define('DB_NAME', 'inclass11');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if(isset($_POST["first_name"], $_POST["last_name"]))
{
 $first_name = mysqli_real_escape_string($connect, $_POST["first_name"]);
 $last_name = mysqli_real_escape_string($connect, $_POST["last_name"]);
 $query = "INSERT INTO user(first_name, last_name) VALUES('$first_name', '$last_name')";
 if(mysqli_query($connect, $query))
 {
  echo 'Data Inserted';
 }
}
?>
