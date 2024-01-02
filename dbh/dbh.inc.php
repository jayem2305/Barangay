<?php  
$localhost = "localhost";
$username = "root";
$password = "";
$dbname = "barangay";

$conn = mysqli_connect($localhost, $username, $password, $dbname);
if (!$conn) {
 die ('Fail to connect to MySQL: ' . mysqli_connect_error());
}

?>