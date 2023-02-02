<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="car_rental_system";

$pno=$_GET['pno'];

$mysqli = new mysqli($servername, $username, $password, $db);
if($mysqli->connect_error) {
  exit('Could not connect');
}

$query = "SELECT * FROM car WHERE $pno=plate_number";

if ($result = $mysqli->query($query)) {
  $row = $result->fetch_assoc();
}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <title>RentUsNow</title>
        <link rel="stylesheet" href="rent_page.css">
        <script src="rent_cars.js"></script>
    </head>
    <body onload="load()">
        <div class="rentContainer">
            <div class="imgContainer" id="car">
              <img src=".<?=$row['picture']?>" alt="welcome" width="95%" pno="<?=$row['plate_number']?>">
              <?php
                $result->free();
              ?>
            </div>
            <div class="rentData">
                <form action="./check_page.php" onsubmit="return checkFields()" name="loginForm" method="post">
                    <div class="inputRent" name="container">
                        <input type="hidden" name="pno" value="<?=$pno?>">
                        <label for="rentDate">Rent Date</label>
                        <input type="date" id="rentDateID" name="rentDate"> 
                        <label for="returnDate">Return Date:</label>
                        <input type="date" id="returnDateID" name="returnDate">
                    </div>
                    <div class="btn">
                        <input type="submit" value="Rent!" id="RentBtn">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>



