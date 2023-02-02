<?php
include 'adminhome.php'
	?>

<form action="all_reservations.php" method="post">
	<br><br><br>
	<h2 style="color:black; text-align:center">RESERVATIONS</h2><br>


	<table class="table table-hover table-light">
		<thead class="thead-dark">
			<tr>
				<th scope="col">#</th>
				<th scope="col">Reservation No.</th>
				<th scope="col">Customer SSN</th>
				<th scope="col">Plate Number</th>
				<th scope="col">Reserve Date</th>
				<th scope="col">Start Date</th>
				<th scope="col">Return Date</th>
				<th scope="col">Payment Type</th>
				<th scope="col">Total Amount</th>

			</tr>
		</thead>
		<?php
                include 'conn.php';
                $query = "SELECT * FROM reservation ORDER BY Order_id";
                $result = mysqli_query($conn, $query);
                $index = 0;

                while ($row = mysqli_fetch_array($result)) {
	                $index = $index + 1;
                ?>
		<tbody class="opacity-50" style="background:white;">
			<tr>
				<th scope="row"><?php echo $index ?></th>
				<td><?php echo $row['Order_id'] ?></td>
				<td><?php echo $row['SSN'] ?></td>
				<td><?php echo $row['plate_number'] ?></td>
				<td><?php echo $row['reserve_date'] ?></td>
				<td><?php echo $row['start_date'] ?></td>
				<td><?php echo $row['return_date'] ?></td>

				<td><?php echo $row['payment_type'] ?></td>
				<td><?php echo $row['total_amount'] ?></td>

			</tr>
			<?php } ?>
		</tbody>
	</table>
</form>
</div>
</body>

</html>