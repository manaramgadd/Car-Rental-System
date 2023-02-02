<?php
$servername = "localhost";
$username = "root";
$password = "";
$db="car_rental_system";
session_start();
$ssn = $_SESSION['ssn'];


$mysqli = new mysqli($servername, $username, $password, $db);
if($mysqli->connect_error) {
  exit('Could not connect');
}



$query = "SELECT * FROM customer WHERE $ssn=SSN";

if ($result = $mysqli->query($query)) {
    $row = $result->fetch_assoc();
    echo"<div class='ssnAndName'>
    	    <div class='namesAndGender'>
    	        <div>
                    <h5>SSN: <span id='ssn'>".$row['SSN']."</span></h5>
                </div>
                <div>
                    <h5>Gender: <span id='gender'>".$row['gender']."</span></h5>
                </div>
    	    </div>
    	    
            <div class='numsBdateAndSSN'>
                <div>
                    <h5>Name: <span id='fname'>".$row['first_name']."</span> <span id='lname'>".$row['last_name']."</span></h5>
                </div>
                <div>
                    <h5>Birth Date: <span id='bd'>".$row['date_of_birth']."</span></h5>
                </div>
                <div>
                    <h5>Phone Number: <span id='pnum'>".$row['phone_no']."</span></h5>
                </div>
            </div>
        </div>";
    $result->free();
}

/*freeresultset*/
?>
