<?php
$con=mysqli_connect('localhost','root','cetmca','student1');
if ($con)
{
echo "Successfully Registered!!!";
}
else
{
echo "Connection Failed";
}
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$email=$_POST['email'];
$rollno=$_POST['rollno'];
$ktuid=$_POST['ktuid'];
$semester=$_POST['semester'];
$marks=$_POST['marks'];
$sql="INSERT INTO student2 (name,age,gender,email,rollno,ktuid,semester,marks) VALUES ('$name',$age,'$gender','$email',$rollno,'$ktuid','$semester','$marks')";
$p=mysqli_query($con,$sql);
if($p)
{
 	echo "<script>alert('Registration completed!!');</script>";
} else {
	echo "ERROR";
}
?>

