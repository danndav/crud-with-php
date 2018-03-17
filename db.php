<?php
/*$dbservername="localhost";
$dbUsername="root";
$dbPassword="";
$dbName="loginsystem";

$conn=mysqli_connect($dbservername,$dbUsername,$dbPassword,$dbName);
*/

$servername = "localhost";
$username = "root";
$password = "";
$dbName="crud_system";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	
}
?>