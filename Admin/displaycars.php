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
          <th scope="col">Brand</th>
          <th scope="col">Model</th>
          <th scope="col">Year</th>
          <th scope="col">Color</th>
          <th scope="col">Status</th>
          <th scope="col">Reserved</th>
          <th scope="col">Office_ID</th>
          <th scope="col">Daily Price</th>
          <th scope="col">Sample Photo</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php


        if (isset($_POST['searchCar'])) {

          $query = array();
          $count = 0;
          $i = 0;
          $plate_number = $_POST['plate_number'];
          $model = $_POST['model'];
          $brand = $_POST['brand'];
          $year = $_POST['year'];
          $office_id = $_POST['office_id'];

          if ($plate_number != NULL) {

            $query[$count] = "plate_number = '$plate_number'";
            $count = $count + 1;
          }
          if ($model != NULL) {
            $query[$count] = "model = '$model'";
            $count = $count + 1;
          }
          if ($brand != NULL) {
            $query[$count] = "brand = '$brand'";
            $count = $count + 1;
          }
          if ($year != NULL) {
            $query[$count] = "'year' = '$year'";
            $count = $count + 1;
          }
          if ($office_id != NULL) {
            $query[$count] = "office_id = '$office_id'";
            $count = $count + 1;
          }


          if ($count == 0) {
            $sql = "SELECT * FROM car";
          } else {
            $sql = "SELECT * FROM car
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
              $plate_number = $row['plate_number'];
              $brand = $row['brand'];
              $model = $row['model'];
              $year = $row['year'];
              $color = $row['color'];
              $status = $row['status'];
              $is_reserved = $row['is_reserved'];
              $office_id = $row['office_id'];
              $price_per_day = $row['price_per_day'];
              $image = $row['picture'];
              echo '<tr>
          <th scope="row">' . $plate_number . '</th>
          <td>' . $brand . '</td>
          <td>' . $model . '</td>
          <td>' . $year . '</td>
          <td>' . $color . '</td>
          <td>' . $status . '</td>
          <td>' . $is_reserved . '</td>
          <td>' . $office_id . '</td>
          <td>' . $price_per_day . '</td>'
          ?><td> <img src="<?php echo $row['picture'] ?>" width="210" height="100" alt=""> 
          <?php echo '<td><button class="btn btn-danger"><a href="deletecar.php?deleted_car=' . $plate_number . '" class="text-light">Delete</a></button> </td>
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