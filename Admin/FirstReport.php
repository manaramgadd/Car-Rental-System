<?php
include "conn.php";
include 'newbg.php'
    ?>
<html>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

<body>

    <div class="container">
        <style>
            .thead,
            tbody,
            th,
            tr {
                font-size: 13px;
                align: center;

            }
        </style>
        <table class="table table-hover table-light">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Order ID</th>
                    <th scope="col">SSN</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone No.</th>
                    <th scope="col">DateOfBirth</th>
                    <th scope="col">Registration Date</th>

                    <th scope="col">Plate No.</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Model</th>
                    <th scope="col">Year</th>
                    <th scope="col">Color</th>
                    <th scope="col">Status</th>
                    <th scope="col">Reserved</th>
                    <th scope="col">Office ID</th>
                    <th scope="col">Daily Price</th>




                </tr>
            </thead>
            <tbody>
                <?php


                if (isset($_POST['Rep1'])) {
                    $from = $_POST['from'];
                    $to = $_POST['to'];

                    $sql = "SELECT * FROM customer AS c
                    JOIN reservation AS r ON c.SSN=r.SSN
                    JOIN car AS car ON r.plate_number= car.plate_number
                    WHERE r.reserve_date >= '$from' AND r.return_date <= '$to'";
                    $result = mysqli_query($conn, $sql);



                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $ssn = $row['SSN'];
                            $pn = $row['plate_number'];
                            $oi = $row['Order_id'];
                            $g = $row['gender'];
                            $mail = $row['email'];
                            $fn = $row['first_name'];
                            $ln = $row['last_name'];
                            $reg_date = $row['Reg_date'];
                            $phone_no = $row['phone_no'];
                            $d_of_birth = $row['date_of_birth'];

                            $brand = $row['brand'];
                            $model = $row['model'];
                            $year = $row['year'];
                            $color = $row['color'];
                            $status = $row['status'];
                            $reserved = $row['is_reserved'];
                            $office = $row['office_id'];
                            $daily = $row['price_per_day'];


                            $ssn2 = $row['SSN'];
                            $rd = $row['reserve_date'];
                            $sd = $row['start_date'];
                            $rdd = $row['return_date'];
                            $pt = $row['payment_type'];
                            $ta = $row['total_amount'];

                            echo '<tr>
                            <th scope="row">' . $oi . '</th><td>' . $ssn . '</td><td>' . $fn . '</td><td>' . $ln . '</td><td>' . $g . '</td> <td>' . $mail . '</td><td>' . $phone_no . '</td><td>' . $d_of_birth . '</td><td>' . $reg_date . '</td>
                            <td>' . $pn . '</td>
                            <td>' . $brand . '</td>
                            <td>' . $model . '</td>
                            <td>' . $year . '</td>
                            <td>' . $color . '</td>
                            <td>' . $status . '</td>
                            <td>' . $reserved . '</td>
                            <td>' . $office . '</td>
                            <td>' . $daily . '</td>
                            </tr>';
                        }
                    }
                }


                ?>
            </tbody>
        </table>
    </div>
</body>

</html>