<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="szkolasp";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Jan', 'Nowak', 'jjnowak@gmail.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Grzegorz', 'Niepolak', 'grzp@gmail.com');";
if (mysqli_multi_query($conn, $sql)) {
    echo "dodano rekordy";
  } else {
    echo "Error nie dodono rekordów " . mysqli_error($conn);
  }
  
  mysqli_close($conn);
?>