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
                    <th scope="col">SSN</th>
                    <th scope="col">Plate No.</th>
                    <th scope="col">Model</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone No.</th>
                    <th scope="col">DateOfBirth</th>
                    <th scope="col">Registration Date</th>

                    <th scope="col">Reservation Date</th>
                    <th scope="col">Start Time</th>
                    <th scope="col">Return Date</th>
                    <th scope="col">Payment Type</th>
                    <th scope="col">Total Amount Paid</th>
                    <th scope="col"></th>

                </tr>
            </thead>
            <tbody>
                <?php


                if (isset($_POST['Rep3'])) {
                    $email = $_POST['email'];


                    $sql = "SELECT * FROM customer AS c
                    JOIN reservation AS r ON c.SSN=r.SSN
                    JOIN car AS car ON r.plate_number= car.plate_number
                    WHERE c.email = '$email'";
                    $result = mysqli_query($conn, $sql);



                    if ($result) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $oi = $row['Order_id'];
                            $ssn = $row['SSN'];
                            $pn = $row['plate_number'];
                            $model = $row['model'];
                            $fn = $row['first_name'];
                            $ln = $row['last_name'];
                            $g = $row['gender'];
                            $mail = $row['email'];
                            $reg_date = $row['Reg_date'];
                            $phone_no = $row['phone_no'];
                            $d_of_birth = $row['date_of_birth'];
                            $rd = $row['reserve_date'];
                            $sd = $row['start_date'];
                            $rdd = $row['return_date'];
                            $pt = $row['payment_type'];
                            $ta = $row['total_amount'];


                            echo '<tr>
                            <th scope="row">' . $oi . '</th><td>' . $ssn . '</td>
                            <td>' . $pn . '</td><td>' . $model . '</td><td>' . $fn . '</td><td>' . $ln . '</td><td>' . $g . '</td> <td>' . $mail . '</td><td>' . $phone_no . '</td><td>' . $d_of_birth . '</td><td>' . $reg_date . '</td>
                            
                            <td>' . $rd . '</td>
                            <td>' . $sd . '</td>
                            <td>' . $rdd . '</td>
                            <td>' . $pt . '</td>
                            <td>' . $ta . '</td>
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