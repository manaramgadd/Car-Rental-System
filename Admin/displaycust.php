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
                    <th scope="col">SSN</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Email</th>
                    <th scope="col">Date of Birth</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Registration Date</th>
                </tr>
            </thead>
            <tbody>
                <?php


                if (isset($_POST['searchCus'])) {

                    $query = array();
                    $count = 0;
                    $i = 0;
                    $SSN = $_POST["ssn"];
                    $first_name = $_POST['first_name'];
                    $last_name = $_POST['last_name'];
                    $email = $_POST['email'];

                    if (array_key_exists("gender", $_POST)) {
                        $gender = $_POST['gender'];

                    } else {
                        $gender = NULL;
                    }

                    if ($SSN != NULL) {
                        $query[$count] = "SSN = '$SSN'";
                        $count = $count + 1;
                    }

                    if ($first_name != NULL) {
                        $query[$count] = "first_name = '$first_name'";
                        $count = $count + 1;
                    }

                    if ($last_name != NULL) {
                        $query[$count] = "last_name = '$last_name'";
                        $count = $count + 1;
                    }

                    if ($email != NULL) {
                        $query[$count] = "email = '$email'";
                        $count = $count + 1;
                    }
                    if ($gender != NULL) {
                        $query[$count] = "gender = '$gender'";
                        $count = $count + 1;
                    }

                    if ($count == 0) {
                        $sql = "SELECT * FROM customer";
                    } else {
                        $sql = "SELECT * FROM customer
        WHERE " . $query[$i];
                        $i = $i + 1;
                        while ($i < $count) {
                            $sql = $sql . " AND " . $query[$i];
                            $i = $i + 1;
                        }
                    }

                    $result = mysqli_query($conn, $sql);
                    $count = mysqli_num_rows($result);
                    if ($count > 0 ) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            $ssn = $row['SSN'];
                            $g = $row['gender'];
                            $mail = $row['email'];
                            $fn = $row['first_name'];
                            $ln = $row['last_name'];
                            $reg_date = $row['Reg_date'];
                            $phone_no = $row['phone_no'];
                            $d_of_birth = $row['date_of_birth'];


                            echo '<tr>
                            <th scope="row">' . $ssn . '</th>
                            <td>' . $fn . '</td>
                            <td>' . $ln . '</td>
                            <td>' . $g . '</td>
                            <td>' . $mail . '</td>
                            <td>' . $d_of_birth . '</td>
                            <td>' . $phone_no . '</td>
                            <td>' . $reg_date . '</td>
                            </tr>';
                        } 
                    }else {
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