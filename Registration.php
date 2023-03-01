
<!DOCTYPE html>
<html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="Signup.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
  
<form  method="post" action="Registrationconnection.php">
    <h1>SignUp</h1>
 <input type="text" name="firstname" placeholder="FirstName" class="form-control" required>
<?php echo @$_GET['firstname'];  ?></font>	
<br>
<input type="text" name="lastname" placeholder="Last Name" class="form-control" required>
<?php echo @$_GET['lastname'];  ?></font>	
<br>
 <input type="text" name="email" placeholder="Email" class="form-control" required>
<?php echo @$_GET['email'];  ?></font>	
<br>
<input type="password" name="password" placeholder="Password" class="form-control" required>
<?php echo @$_GET['password'];  ?></font>	
<br>
 <input type="password" name="cpassword" placeholder="Confirm Password" class="form-control" required>
<?php echo @$_GET['cpassword'];  ?></font>	
<br>
<button name="submit" class="btn btn-secondary" value="submit">Signup</button>
</form>

</body>

</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "customer";

$conn = mysqli_connect($servername, $username, $password, $database);
 //form has been submitted
if(isset($_POST['submit'])) 
{
  $student_firstname=$_POST['firstname'];
 $student_lastname=$_POST['lastname'];
  $student_email=$_POST['email'];
  $student_password=$_POST['password'];
 $student_cpassword=$_POST['cpassword'];
 if($student_firstname=='')
 {
 	echo " 
 	<script> window.open('Registeration.php?firstname=Firstname is Required','_self')</script>";
 	exit();
 }
 if($student_lastname=='')
 {
 	echo " 
 	<script> window.open('Registeration.php?lastname=Lastname is Required','_self')</script>";
 	exit();
 }
 if($student_email=='')
 {
 	echo " 
 	<script> window.open('Registeration.php?email= Email is Required','_self')</script>";
 	exit();
 }
 if($student_password=='')
 {
 	echo " 
 	<script> window.open('Registeration.php?password= Password is Requird','_self')</script>";
 	exit();
 }
 if($student_cpassword=='')
 {
 	echo " 
 	<script> window.open('Registeration.php?cpassword= CPassword is Required','_self')</script>";
 	exit();
 }
 $query = "INSERT INTO form(firstname, lastname, email, password) VALUES('$student_firstname','$student_lastname','$student_email','$student_password','$student_cpassword')";
 if( mysqli_query($conn,$query))
 {
 	echo "<b><h2> Data has been inserted into database </h2></b>";
 }

}
?>