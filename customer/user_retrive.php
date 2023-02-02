<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="car_rental_system";
session_start();
$ssn=$_SESSION['ssn'];

$mysqli = new mysqli($servername, $username, $password, $db);
if($mysqli->connect_error) {
  exit('Could not connect');
}

$query = "SELECT * FROM customer WHERE $ssn=SSN";

if ($result = $mysqli->query($query)) {
  $row = $result->fetch_assoc();
  echo "<span> ". $row['first_name'] ."</span>";
  $result->free();
}
?>