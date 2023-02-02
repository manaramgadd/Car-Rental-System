<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="car_rental_system";
$searchWord = $_POST['search'];
$searchOption = $_POST['searchOption'];

$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM car WHERE $searchOption = '$searchWord' AND is_reserved='N'";
?>
	
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>RentUsNow</title>
        <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist/css/bootstrap.css">
        <link rel="stylesheet" href="./search.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    </head>
    <body>
    	<div class="container">
    		<div class="tableContainer">
			<table class="table table-hover table-dark">
			<thead class="thead-dark">
				<tr>
				  <th scope="col">#</th>
				  <th scope="col">Car</th>
				  <th scope="col">Plate No.</th>
				  <th scope="col">Model</th>
				  <th scope="col">Brand</th>
				  <th scope="col">Year</th>
				  <th scope="col">Color</th>
				  <th scope="col">Price/Day</th>
				</tr>
			      </thead>
			<?php
			    if ($query = $conn->query($sql)) {
		  	    $i=1;
		  	    while ($row = $query->fetch_assoc()) {
		      		echo "<tr>";
		      		echo "<td>". ($i) . "</td>";
		      		echo "<td class='w-25'><img src=.". $row['picture'] ." class='img-fluid img-thumbnail' data-id='".$row['plate_number']."' onclick='go_to(this)'></td>";
				echo "<td>" . $row['plate_number'] . "</td>";
				echo "<td>" . $row['model'] . "</td>";
				echo "<td>" . $row['brand'] . "</td>";
				echo "<td>" . $row['year'] . "</td>";
				echo "<td>" . $row['color'] . "</td>";
				echo "<td>" . $row['price_per_day'] . "</td>";
				echo "</tr>";
				$i++;
		  	    }
			}
			?>
			</table>
		</div>
     </div>
    </body>
</html>

