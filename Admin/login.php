
<?php
include "conn.php";

if(isset($_POST['submit'])){
session_start();

$email=$_POST['email'];
$password=$_POST['pwd']; 

$query=mysqli_query($conn,"SELECT * 
                                    FROM customer 
                                    WHERE email='$email' AND password='$password'") ;
   $res=mysqli_fetch_array($query);
   if($res){
      $_SESSION['ssn'] = $res['SSN'];
      echo"<script>alert('login successful')</script>";
      header("location:customer/customer_home_page.html");
   }
   else
   {
    echo"<script>alert('invalid email or password')</script>";
   }
 
}
?>

