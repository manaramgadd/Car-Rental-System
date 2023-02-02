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

$query = "SELECT * FROM car as c JOIN reservation as r ON c.plate_number=r.plate_number WHERE c.plate_number IN (SELECT plate_number FROM reservation as r WHERE r.SSN=$ssn)";

if ($result = $mysqli->query($query)) {
    echo "<table class='table table-hover table-dark'>";
    $i=1;
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>". ($i) . "</td>";
        echo "<td class='w-25'><img src=.". $row['picture'] ." class='img-fluid img-thumbnail' data-id='".$row['plate_number']."' onclick='go_to(this)'></td>";
        echo "<td>" . $row['plate_number'] . "</td>";
        echo "<td>" . $row['model'] . "</td>";
        echo "<td>" . $row['brand'] . "</td>";
        echo "<td>" . $row['year'] . "</td>";
        echo "<td>" . $row['color'] . "</td>";
        echo "<td>" . $row['reserve_date'] . "</td>";
        echo "<td>" . $row['start_date'] . "</td>";
        echo "<td>" . $row['return_date'] . "</td>";
        echo "<td>" . $row['total_amount'] . "</td>";
        echo "</tr>";
        $i++;
    }
    echo "</table>";

/*freeresultset*/
$result->free();
}
?>