<?php include 'adminhome.php';?>
<html>

        <table class="table">

  <thead class="thead-dark">
    <tr>
     	   <th scope="col">Index</th>

      <th scope="col">Reservation No</th>
      <th scope="col">SSN</th>
      <th scope="col">Plate Number </th>
	  <th scope="col">Daily Price</th>
    <th scope="col">Rent  Date  </th>
    <th scope="col">Return  Date  </th>
	  <th scope="col">Total Cost</th>
	  <th scope="col">Total Income</th>
	
	


			
    </tr>
  </thead>		
  <?php 
    include 'conn.php';
    if(isset($_POST['submit'])){
      $start_date=$_POST['from'];
     $end_date=$_POST['to'];

     
	$query="SELECT * FROM  reservation  as  R join Car as C on R.plate_number=C.plate_number
  WHERE 
  (start_date >'$start_date' OR  start_date ='$start_date') AND  (start_date <'$end_date' OR start_date ='$end_date') ";
$q="SELECT SUM(total_amount) FROM reservation";
	$result = mysqli_query($conn,$query); 
	$r = mysqli_query($conn,$q); 
	$index=0;
$qty= 0;
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {$index=$index+1;
          
        echo "<tbody class='opacity-50' style='background:white'>".
        "<tr><th scope='row'>". $index."</th><td>".$row['Order_id']."</td><td>" . $row['SSN']."</td><td>".$row['plate_number']. "</td><td>" .$row['price_per_day'].  "</td><td>" .$row['start_date'].  "</td><td>" .$row['return_date'].  "</td><td>" .$row['total_amount']. "</td>" ;
 $qty += $row['total_amount'];


 
        }
	
		
      } echo "<td>".$qty."</td></tr>";
	    
    }
	?>
	
  </tbody>
</table>


			</form>
		</div>
	</body>
</html>
