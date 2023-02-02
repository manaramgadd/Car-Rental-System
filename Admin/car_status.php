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
                    <th scope="col">Plate Number</th>
                    <th scope="col">Status</th>
                    <th scope="col">Sample Photo</th>
                </tr>
            </thead>
            <tbody>
                <?php


                if (isset($_POST['view'])) {
                    $current_date = $_POST['current'];

                    // active cars
                    $query = "SELECT plate_number, picture FROM `car` where plate_number not in (Select plate_number 
                    from `car_status` where (`OFS_start` < '$current_date' OR `OFS_start` = '$current_date') AND ( `OFS_end` >  '$current_date' OR `OFS_end` IS NULL OR `OFS_end` = '$current_date'))";

                    $res1 = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_assoc($res1)) {
                        $plate_number = $row['plate_number'];
                        echo '<tr>
                        <th scope="row">' . $plate_number . '</th>
                        <td>  active  </td>'
                            ?>
                        <td> <img src="<?php echo $row['picture'] ?>" width="210" height="100" alt="">
                            <?php echo '
                        </tr>';
                    }


                    // out of service cars
                    $sql = "SELECT plate_number, picture from `car_status` NATURAL JOIN `car` where (`OFS_start` < '$current_date' OR `OFS_start` = '$current_date') AND ( `OFS_end` >  '$current_date' OR `OFS_end` IS NULL OR `OFS_end` = '$current_date')";
                    $res2 = mysqli_query($conn, $sql);

                    while ($row = mysqli_fetch_assoc($res2)) {
                        $plate_number = $row['plate_number'];
                        echo '<tr>
                        <th scope="row">' . $plate_number . '</th>
                        <td>  out of service  </td>'
                            ?>
                        <td> <img src="<?php echo $row['picture'] ?>" width="210" height="100" alt="">
                            <?php echo '
                        </tr>';
                    }

                }
                ?>

            </tbody>
        </table>
    </div>
</body>

</html>