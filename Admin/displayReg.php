<?php
include "conn.php";
include 'adminhome.php'
    ?>

<html>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

<body>
    <div class="container">
        <table class="table table-hover table-light">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Order ID</th>
                    <th scope="col">Plate Number</th>
                    <th scope="col">SSN</th>
                    <th scope="col">Reservation Date</th>
                    <th scope="col">Start Time</th>
                    <th scope="col">Return Date</th>
                    <th scope="col">Payment Type</th>
                    <th scope="col">Total Amount Paid</th>
                </tr>
            </thead>
            <tbody>
                <?php


                if (isset($_POST['searchRes'])) {

                    $query = array();
                    $count = 0;
                    $i = 0;
                    $order = $_POST["order"];
                    $plate_no = $_POST['plate_no'];
                    $SSN2 = $_POST['ssn2'];


                    if (array_key_exists("payment", $_POST)) {
                        $payment = $_POST['payment'];

                    } else {
                        $payment = NULL;
                    }

                    if ($order != NULL) {
                        $query[$count] = "order_id = '$order'";
                        $count = $count + 1;
                    }

                    if ($plate_no != NULL) {
                        $query[$count] = "plate_number = '$plate_no'";
                        $count = $count + 1;
                    }

                    if ($SSN2 != NULL) {
                        $query[$count] = "SSN = '$SSN2'";
                        $count = $count + 1;
                    }
                    if ($payment != NULL) {
                        $query[$count] = "payment_type = '$payment'";
                        $count = $count + 1;
                    }

                    if ($count == 0) {
                        $sql = "SELECT * FROM reservation";
                    } else {
                        $sql = "SELECT * FROM reservation
        WHERE " . $query[$i];
                        $i = $i + 1;
                        while ($i < $count) {
                            $sql = $sql . " AND " . $query[$i];
                            $i = $i + 1;
                        }
                    }

                    $result = mysqli_query($conn, $sql);
                    $count = mysqli_num_rows($result);


                    if ($count > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $oi = $row['Order_id'];
                            $pn = $row['plate_number'];
                            $ssn2 = $row['SSN'];
                            $rd = $row['reserve_date'];
                            $sd = $row['start_date'];
                            $rdd = $row['return_date'];
                            $pt = $row['payment_type'];
                            $ta = $row['total_amount'];

                            echo '<tr>
                            <th scope="row">' . $oi . '</th>
                            <td>' . $pn . '</td>
                            <td>' . $ssn2 . '</td>
                            <td>' . $rd . '</td>
                            <td>' . $sd . '</td>
                            <td>' . $rdd . '</td>
                            <td>' . $pt . '</td>
                            <td>' . $ta . '</td>
                            </tr>';
                        }
                    } else {
                        echo "<script type='text/javascript'>
                        alert('No Data Found !');
                        location = 'adminhome.php';
                      </script>";
                    }
                }

                ?>
            </tbody>
        </table>
    </div>
</body>

</html>