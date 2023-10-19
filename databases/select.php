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
echo "<style>
table,td,th{
    border: 1px solid;
    border-collapse:collapse;
}
</style>";
echo "<table>\n";
echo "<tr><td>id</td><td>name</td><td>surname</td></tr>\n";
if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    //echo "id: ". $row["id"]." - Name: ".$row["firstname"]." ". $row["lastname"]."<br>";
    echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]."</td><td>".$row["lastname"]."</td></tr>\n";
  }
} else {
  echo "0 results";
}
echo "</table>\n";

mysqli_close($conn);
?>