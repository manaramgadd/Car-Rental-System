<?php
include "conn.php";

if (isset($_GET['deleted_car'])) {
    $plate_number = $_GET['deleted_car'];
    $sql = "SELECT * FROM `car` WHERE plate_number = $plate_number AND is_reserved = 'N'";
    $sql = mysqli_query($conn, $sql);
    if ($sql->num_rows > 0) {
        $query = "DELETE from `car` WHERE plate_number = $plate_number";
        $result = mysqli_query($conn, $query);
        echo "<script type='text/javascript'>
        alert(' Car Deleted Successfully !');
        location = 'car_info.php';
      </script>";
    } else {
        echo "<script type='text/javascript'>
        alert('CANNOT DELETE. CAR IS RESERVED !');
        location = 'adminhome.php';
      </script>";
    } 
}
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>