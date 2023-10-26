<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname="szkolasp";


$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql="ALTER TABLE myguests ADD vehicle2 varchar(50);";
mysqli_query($conn, $sql);
mysqli_close($conn);