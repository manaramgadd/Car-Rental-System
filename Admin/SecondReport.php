<?php
include "conn.php";
include 'newbg.php'
    ?>

<body>

    <div class="container">
        <table class="table table-hover table-light">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Order ID</th>
                    <th scope="col">Plate No.</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Model</th>
                    <th scope="col">Year</th>
                    <th scope="col">Color</th>
                    <th scope="col">Status</th>
                    <th scope="col">Country</th>
                    <th scope="col">City</th>
                    <th scope="col">Daily Price</th>
                    <th scope="col">Reserved Date </th>
                    <th scope="col">Rent Date </th>
                    <th scope="col">Return Date </th>
                    <th scope="col">Payment Type</th>
                    <th scope="col">Amount Paid</th>
                    <th scope="col">Sample Photo</th>

                </tr>
            </thead>
            <tbody>
                <?php


                if (isset($_POST['Rep2'])) {
                    $from = $_POST['from'];
                    $to = $_POST['to'];

                    $sql = "SELECT * FROM reservation AS r
                    JOIN car AS c ON r.plate_number=c.plate_number 
                    JOIN office AS o ON c.office_id = o.office_id
                    WHERE r.reserve_date >= '$from' AND r.return_date <= '$to'";
                    $result = mysqli_query($conn, $sql);



                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $oi = $row['Order_id'];
                            $pn = $row['plate_number'];
                            $brand = $row['brand'];
                            $model = $row['model'];
                            $year = $row['year'];
                            $color = $row['color'];
                            $status = $row['status'];
                            $reserved = $row['is_reserved'];
                            $country = $row['Country'];
                            $city = $row['City'];
                            $daily = $row['price_per_day'];
                            $rd = $row['reserve_date'];
                            $sd = $row['start_date'];
                            $rdd = $row['return_date'];
                            $pt = $row['payment_type'];
                            $ta = $row['total_amount'];

                            echo '<tr>
                            <th scope="row">' . $oi . '</th>
                            <td>' . $pn . '</td>
                            <td>' . $brand . '</td>
                            <td>' . $model . '</td>
                            <td>' . $year . '</td>
                            <td>' . $color . '</td>
                            <td>' . $status . '</td>
                            <td>' . $country . '</td>
                            <td>' . $city . '</td>
                            <td>' . $daily . '</td>
                            <td>' . $rd . '</td>
                            <td>' . $sd . '</td>
                            <td>' . $rdd . '</td>
                            <td>' . $pt . '</td>
                            <td>' . $ta . '</td>'
                                ?>
                            <td> <img src="<?php echo $row['picture'] ?>" width="210" height="100" alt="">
                                <?php echo ' </tr>';
                        }
                    }
                }


                ?>
            </tbody>
        </table>
    </div>
</body>

</html>