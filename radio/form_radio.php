<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname="szkolasp";

$name=$_POST["name"];
$surname=$_POST["surname"];
$fav_language=$_POST["fav_language"];


$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$sql="INSERT INTO MyGuests (firstname, lastname,favlang)
VALUES('$name','$surname','$fav_language')";

if (mysqli_query($conn, $sql, )) {
    echo "Dodano rekord";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
