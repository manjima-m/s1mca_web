<?php
   $con=mysqli_connect('localhost','root','cetmca','student1');
if($con)
{
 	echo "Connection Successful";
}
else
{
	echo "Connection failed";
}
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "select * from register where username = '$username' and password = '$password'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
$count=mysqli_num_rows($result);

if($count==1)
{
 	
   	header("Location:frameset.php");
}
else{
	echo "<h1>Login failed. Invalid username or password.</h1>";
}
?>
