<!DOCTYPE html>
<html lang="en">
<head>
<title>Registration</title>
</head>
<body>
<form action="" method ="POST">
<h1>REGISTRATION</h1>
<div>
 Enter your Username : <br>
 <input type="text" name="username">
</div>
<div>
 Enter your age: <br>
 <input type="number" name="age">
</div>
<div>
 Enter your password : <br>
<input type="password" name="password">
 </div>
<div>
Retype Password : <br>
<input type="password" name="repassword">
</div>
<section>
<button type="submit">Register</button>
</section>
</form>
<body>
</html>

<?php
$con=mysqli_connect('localhost','root','cetmca','student1');
if($con)
{
	echo "Connection succesful";
}
else
{
 	echo "Connection failed";
}
 	$n=$_POST['username'];
	$age=$_POST['age'];
	$pw=$_POST['password'];
$sq="INSERT INTO `register`(`username`, `age`, `password`) VALUES ('$n',$age,'$pw')";
$p=mysqli_query($con,$sq);
if($p)
{
	echo "<script>alert('successfully inserted row1');</script>";
}
else{
	
}
{
echo "<script>alert('Error');</script>";
}
?>

 
