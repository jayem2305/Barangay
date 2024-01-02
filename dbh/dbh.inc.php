<?php  
$localhost = "34.87.21.182";
$username = "root";
$password = "";
$dbname = "barangay";

$conn = mysqli_connect($localhost, $username, $password, $dbname);
if (!$conn) {
 die ('Fail to connect to MySQL: ' . mysqli_connect_error());
}

?>