<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="car_rental_system";

$mysqli = new mysqli($servername, $username, $password, $db);
if($mysqli->connect_error) {
  exit('Could not connect');
}

$pno = $_POST['pno'];
$rentDate= $_POST['rentDate'];
$returnDate = $_POST['returnDate'];
$datetime1 = new DateTime(date("Y-m-d", strtotime($rentDate)));
$datetime2 = new DateTime(date("Y-m-d", strtotime($returnDate)));
$diff = $datetime1->diff($datetime2)->format('%R%a days');
$days = (double) $diff;

$query = "SELECT * FROM car WHERE $pno=plate_number";

if ($result = $mysqli->query($query)) {
  $row = $result->fetch_assoc();
}
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <title>RentUsNow</title>
        <link rel="stylesheet" href="bootstrap-5.3.0-alpha1-dist/css/bootstrap.css">
        <link rel="stylesheet" href="check_page.css">
        <script src="customer_home_page.js"></script>
    </head>
    <body>
        <div class="mainPageContainer">
            <div class="purchaseData">
                <div class="dates">
                    <div>
                        <p>Pickup Date: <span id="pickupDate"><?=$rentDate?></span></p>
                    </div>
                    <div>
                        <p>Return Date: <span id="returnDate"><?=$returnDate?></span></p>
                    </div>
                </div>
                <div class="carData">
                    <div>
                        <p>Model: <span id="model"><?=$row['model']?></span></p>
                    </div>
                    <div>
                        <p>Brand: <span id="brand"><?=$row['brand']?></span> </p>
                    </div>
                    <div>
                        <p>Year: <span id="year"><?=$row['year']?></span></p>
                    </div>
                    <div>
                        <p>Color: <span id="color"><?=$row['color']?></span></p>
                    </div>
                </div>
                <div class="prices">
                    <div>
                        <p>Price/Day: <span id="pricePerDay"><?=$row['price_per_day']?></span></p>
                    </div>
                    <div>
                        <p>Total Price: <span id="totalPrice"><?=$days*$row['price_per_day']?></span></p>
                    </div>
                </div>
                <div class="prices">
                    <div>
                        <p>Have a Good Day! ^_^</p>
                    </div>
                </div>
            </div>
            <form action="reserve.php" name="confirm" method="post">
            <div class="purchaseBtnContainer">
                <button class="purchaseBtn">Confirm Purchase</button>
                <input type="hidden" name="pno" value="<?=$pno?>">
                <input type="hidden" name="rentDate" value="<?=date("Y-m-d", strtotime($rentDate))?>">
                <input type="hidden" name="returnDate" value="<?=date("Y-m-d", strtotime($returnDate))?>">
                <input type="hidden" name="total_price" value="<?=$diff*$row['price_per_day']?>">
                <input type="hidden" name="reserve_date" value="<?=date("Y-m-d", time())?>">
            </div>
            </form>
        </div>
    </body>
</html>
<?php
    $result->free();
?>