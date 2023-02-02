<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="car_rental_system";
session_start();
$ssn=$_SESSION['ssn'];
$pno=$_POST['pno'];
$rentDate=$_POST['rentDate'];
$retrunDate=$_POST['returnDate'];
$total_price=$_POST['total_price'];
$reserve_date=$_POST['reserve_date'];



$mysqli = new mysqli($servername, $username, $password, $db);
if($mysqli->connect_error) {
  exit('Could not connect');
}
$sql= $mysqli->prepare("INSERT INTO `reservation` (`plate_number`,`SSN`,`reserve_date`,`start_date`,`return_date`,`total_amount`) VALUES (?,?,?,?,?,?)");
$sql->bind_param("ssssss",$pno,$ssn,$reserve_date,$rentDate,$retrunDate,$total_price);
$sql->execute();
$quer = "UPDATE car SET `is_reserved`='Y' WHERE `plate_number`=$pno";
$sql2= $mysqli->prepare($quer);
$sql2->execute();

header('Location: customer_home_page.html');
$sql->close();
$sql2->close();
$conn->close();


?>