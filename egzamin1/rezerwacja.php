<?php 
$servname="localhost";
$username="root";
$pas="";
$dbname="baza3";

$data=$_POST["data"];
$os=$_POST["os"];
$nrtel=$_POST["nrtel"];

$conn = mysqli_connect($servname, $username, $pas,$dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql="INSERT INTO rezerwacje(data_rez, liczba_osob, telefon) values('$data','$os','$nrtel')";
if(mysqli_query($conn,$sql)){
    echo "Dodano rezerwację do bazy";
}
mysqli_close($conn);
?>