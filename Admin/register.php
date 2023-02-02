<?php
session_start();

include 'conn.php';

if(isset($_POST['reg_user'])){
  
    $First_name = $_POST['First_name'];
    $Last_name = $_POST['Last_name'];
    $email = $_POST['email'];
    $password_1 = md5($_POST['pwd']);
    $password_2 = md5($_POST['cpwd']);
    $gender = $_POST['gender'];
    $birth_date = $_POST['date_of_birth'];


    $sql = "SELECT * FROM admin WHERE email='$email'";
    $result = mysqli_query($conn,$sql);
        
    if(mysqli_num_rows($result) == 0)
    {
        $sql = "INSERT INTO admin (First_name,Last_name,email,`password`,gender,date_of_birth)
        VALUES ('$First_name','$Last_name','$email','$password_1','$gender','$birth_date')";
        $result = mysqli_query($conn,$sql);

        if($result)
        {
            echo"<script> alert('Registration Done Successfully')</script>";            
        }else {
            echo "<script>alert('Something went wrong')</script>";
             }
    }else {
        echo "<script>alert('Email Already Exists !!')</script>";
          }   
        }
    
?>