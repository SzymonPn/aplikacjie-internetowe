<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname="szkolasp";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully<br>";
$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: ". $row["id"]." - Name: ".$row["firstname"]." ". $row["lastname"]."<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?>