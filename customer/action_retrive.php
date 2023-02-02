<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="car_rental_system";


$mysqli = new mysqli($servername, $username, $password, $db);
if($mysqli->connect_error) {
  exit('Could not connect');
}

$query = "SELECT * FROM car WHERE is_reserved='N'";

if ($result = $mysqli->query($query)) {
    echo "<table class='table table-hover table-dark'>";
    $i=1;
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>". ($i) . "</td>";
        echo "<td class='w-25'><img src=.". $row['picture'] ." class='img-fluid img-thumbnail' data-id='".$row['plate_number']."' onclick='rent(this)'></td>";
        echo "<td>" . $row['plate_number'] . "</td>";
        echo "<td>" . $row['model'] . "</td>";
        echo "<td>" . $row['brand'] . "</td>";
        echo "<td>" . $row['year'] . "</td>";
        echo "<td>" . $row['color'] . "</td>";
        echo "<td>" . $row['price_per_day'] . "</td>";
        echo "</tr>";
        $i++;
    }
    echo "</table>";

/*freeresultset*/
$result->free();
}
?>