<?php
include('conn.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	include('conn.php');
	$plate_number = stripslashes($_REQUEST['plate']);
	$plate_number = mysqli_real_escape_string($conn, $plate_number);
	$sql = "select * from car where plate_number = '$plate_number' ";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$count = mysqli_num_rows($result);

	if ($count == 1) {
		echo "<script type='text/javascript'>
        alert('car already exists');
        location = 'adminhome.php';
      </script>";
	}

	$model = stripslashes($_REQUEST['model']);
	$model = mysqli_real_escape_string($conn, $model);


	$brand = stripslashes($_REQUEST['brand']);
	$brand = mysqli_real_escape_string($conn, $brand);
	$year = stripslashes($_REQUEST['year']);
	$year = mysqli_real_escape_string($conn, $year);
	$color = stripslashes($_REQUEST['color']);
	$color = mysqli_real_escape_string($conn, $color);
	$price_per_day = stripslashes($_REQUEST['price_per_day']);
	$price_per_day = mysqli_real_escape_string($conn, $price_per_day);
	$office_id = stripslashes($_REQUEST['office_id']);
	$office_id = mysqli_real_escape_string($conn, $office_id);
	$picture = stripslashes($_REQUEST['picture']);
	$picture = mysqli_real_escape_string($conn, $picture);
	$sql = "INSERT INTO Car (plate_number,model,brand,`year`,`status`, color,price_per_day,office_id,picture, is_reserved) VALUES 
    ('$plate_number','$model','$brand','$year','active','$color','$price_per_day','$office_id','$picture','N')";
	if ($conn->query($sql)) {
		echo "<script type='text/javascript'>
		alert('Car has been added successfully!');
		location = 'adminhome.php';
	  </script>";
	}
}

?>