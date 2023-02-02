<?php
include "adminhome.php";
?>

<body>
	<div>
			<table class="table table-hover table-light">
				<thead class="thead-dark">
					<tr>
						<th scope="col">#</th>
						<th scope="col">Plate no.</th>
						<th scope="col">Brand</th>
						<th scope="col">Model</th>
						<th scope="col">Year</th>
						<th scope="col">State</th>
						<th scope="col">Color</th>
						<th scope="col">Price</th>
						<th scope="col">office_id</th>
						<th scope="col">image</th>

					</tr>
				</thead>

<?php
  include 'conn.php';
  $query = "SELECT * FROM car natural join office ORDER BY city,country";
  $result = mysqli_query($conn, $query);
  $index = 0;

  while ($row = mysqli_fetch_array($result)) {
	  $index = $index + 1;
  ?>
				<tbody class="opacity-50" style="background:white;">
					<tr>
						<th scope="row"><?php echo $index ?></th>
						<td><?php echo $row['plate_number'] ?></td>
						<td><?php echo $row['brand'] ?></td>

						<td><?php echo $row['model'] ?></td>
						<td><?php echo $row['year'] ?></td>
						<td><?php echo $row['status'] ?></td>
						<td><?php echo $row['color'] ?></td>
						<td><?php echo $row['price_per_day'] ?></td>
						<td><?php echo $row['office_id'] ?></td>

						<td> <img src="<?php echo $row['picture'] ?>" width="210" height="100" alt="">
							</a></td>



					</tr>
					<?php } ?>
				</tbody>
			</table>
		</form>
	</div>
</body>

</html>