Welcome <?php echo $_POST["name"].$_POST["surname"];?><br>
Your email adress is: <?php echo $_POST["email"];?><br>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "szkolasp";
$name=$_POST["name"];
$surname=$_POST["surname"];
$email=$_POST["email"];

$vehicle1=NULL;
$vehicle2=NULL;

if(isset($_POST['vehicle1'])){
    $vehicle1=$_POST['vehicle1'];
}
if(isset($_POST['vehicle2'])){
    $vehicle2=$_POST['vehicle2'];
}

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql="INSERT INTO MyGuests (firstname, lastname, email,vehicle1,vehicle2)
VALUES('$name','$surname','$email','$vehicle1','$vehicle2')";

if (mysqli_query($conn, $sql)) {
    echo "Dodano rekord";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);
  ?>
