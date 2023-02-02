<?php
include('conn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include('conn.php');
    $plate_number = stripslashes($_REQUEST['plate']);
    $plate_number = mysqli_real_escape_string($conn, $plate_number);
    $sql = "SELECT * from `car` where `plate_number` = '$plate_number' ";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if ($count == 0) {
        echo "<script type='text/javascript'>
        alert('Plate No. doesn't exist on the system');
        location = 'adminhome.php';
      </script>";
    } else if ($count == 1) {
        $status = stripslashes($_REQUEST['status']);
        $status = mysqli_real_escape_string($conn, $status);
        $price_per_day = stripslashes($_REQUEST['price_per_day']);
        $price_per_day = mysqli_real_escape_string($conn, $price_per_day);
        $current_date = stripslashes($_REQUEST['curr_date']);
        $current_date = mysqli_real_escape_string($conn, $current_date);


        $sql = "SELECT * from `car` where `plate_number` = '$plate_number' AND is_reserved = 'N' AND `status` != '$status'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $getc = mysqli_num_rows($result);
        if ($getc == 0) {
            echo "<script type='text/javascript'>
            alert('Car is reserved');
            location = 'adminhome.php';
          </script>";
        } else if ($getc == 1) {
            if ($price_per_day != "") {

                $sql = "UPDATE car SET price_per_day= '$price_per_day' WHERE plate_number='$plate_number' ";
                $result = mysqli_query($conn, $sql);
            }
            if ($status != "" && $current_date != "") {

                $sql = "UPDATE `car` SET `status` = '$status'  WHERE plate_number='$plate_number' ";
                $result = mysqli_query($conn, $sql);
            }
            if ($status == 'out of service') {
                $sql2 = "INSERT INTO `car_status` (plate_number, OFS_start) VALUES ('$plate_number','$current_date')";
            } else if ($status == 'active') {
                $sql2 = "UPDATE `car_status` SET `OFS_end` = '$current_date' WHERE plate_number = '$plate_number'";
            }

            if ($conn->query($sql2)) {
                echo "<script type='text/javascript'>
            alert('Car has been updated successfully!');
            location = 'adminhome.php';
          </script>";
            }
        }

    }




}
?>