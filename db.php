<?php 

$server = "localhost";
$user = "root";
$password = "";
$db = "Test_session";

$con = mysqli_connect($server,$user,$password,$db);

if (!$con) {
	echo "Not connected".mysqli_connect_error();
}
// else{
// 	echo "connected successfully!";
// }

 ?>