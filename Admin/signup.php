<?php include('register.php') ?>

<html>
<head>
<link rel="stylesheet" media="screen" href="bootstrap.min.css">

<script type = "text/javascript">
   function do_signup()
   {
      var email = document.forms["form2"]["email"].value;
      var pass = document.forms["form2"]["pwd"].value;
      if(reg()&& validateEmail())

      {
         
         $.ajax
            ({
            type:'post',
            url:'index.php',
            data:{
               do_signup:"do_signup",
               email:email,
               password:pass,
			   

            },
            success:function(response) 
            {
               if(response=="success")
               {
                  window.location.href="adminhome.php";
               }
               else
               {
                     
                     alert("Wrong Details");
               }
            }
         });
      } 
         return false;
   }


   function reg()
   {
      var empt1 = document.forms["form2"]["Fname"].value;
      var empt2 = document.forms["form2"]["email"].value;
      var empt3 = document.forms["form2"]["pwd"].value;
      var empt4 = document.forms["form2"]["cpwd"].value;
      var empt5 = document.forms["form2"]["Lname"].value;
      var empt7 = document.forms["form2"]["birth"].value;
      var empt10 = document.forms["form2"]["gender"].value;

      if (empt1.trim() == "" || empt2.trim()=="" || empt3.trim()=="" || empt4.trim()=="" || empt5.trim()==""||empt7.trim()==""|| empt10.trim()=="")
      {
         alert("Please fill the empty field");
         return false;
      }
      else if(empt3 !=empt4)
      {
         alert("password & confirm password didn't match, please try again");
         return false;
      }
      else 
      {
         return true; 
      }
   } 

 

   function validateEmail(){      
   email =document.forms["form2"]["email"].value
   var emailPattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
   if( /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))
   {
      return true;
   }
   else
   {
      alert("You have entered an invalid email address!");
      return false;
   }
 } 
   </script>
</head>
<body class="modal-body">
<style>
body {
  background-image: url('j.jpg');
  background-repeat: no-repeat;
  background-attachment:fixed;
  background-size:cover;
  overflow-x: hidden;
}
</style>

<!-- <main  class="container" style="margin-top: 10%;margin-left:70%">  -->
   <h1 style="color:white; margin-left:70%">Sign up<h1>
<form action='#' method='post' onsubmit="return do_signup();" id="form2">
<div class="form-group">
<label style="width:20%;font-size:20;color:white;margin-left:60%" class="form-control-plaintext" >First name:</label>
<input style="width:25%;font-size:20;color:black;margin-left:60%"type='text' class="form-control" name='Fname' required/>
<label style="width:20%;font-size:20;color:white;margin-left:60%" class="form-control-plaintext" >Last name:</label>
<input style="width:25%;font-size:20;color:black;margin-left:60%"type='text' class="form-control" name='Lname' required/>

<label style="width:20%;font-size:20;color:white;margin-left:60%"class="form-control-plaintext" >Email:</label>
<input style="width:25%;font-size:20;color:black;margin-left:60%"type='text' class="form-control" name='email'required/>
<label style="width:20%;font-size:20;color:white;margin-left:60%" class="form-control-plaintext" >Password:</label>
<input style="width:25%;font-size:20;color:black;margin-left:60%"type='password' class="form-control" name='pwd' required/>
<label style="width:20%;font-size:20;color:white;margin-left:60%" class="form-control-plaintext" >Confirm Password:</label>
<input style="width:25%;font-size:20;;margin-left:60%"type='password' class="form-control" name='cpwd' required/>

<label style="width:20%;font-size:20;color:white;margin-left:60%" class="form-control-plaintext" >Gender:</label>

<select style="margin-left:60%;font-size:20" name="gender" id="gender">
<option style="margin-left:60%;font-size:20" class="form-control-plaintext"  value="">M/F</option>
<option class="form-control-plaintext" value="f">F</option>
<option  class="form-control-plaintext" value="m">M</option>
</select>
<label style="font-size:20;color:white;margin-left:60%" class="form-control-plaintext" for="birth_date">Birth Date:</label>
<input style="width:13%; font-size:20;color:black;margin-left:60%"  type="date" id="birth" name="birth" required>


</div>

<div style="margin-left:60%">
<input style="color:white;background-color:red;border: none;font-size:20;margin-left:30%" type='submit' name='reg_user' class="btn btn-success" value='Sign Up'/>
</div>
</form>
<a href="index.php" style="margin-left:60%; color:white ; font-size: 18px;margin-left:60%">Already have an account ?</a>

<!-- </main> -->
</body>
</html>

