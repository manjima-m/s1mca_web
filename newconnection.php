<?php
$con=mysqli_connect('localhost','root','cetmca','student1');
if($con)
{
	echo "connection successful";
}
else
{
	echo "connection failed";
}
$rollno=$_POST['rollno'];
$name=$_POST['name'];
$mark=$_POST['mark'];
$sq="insert into stud values($rollno,'$name','$mark')";

$p=mysqli_query($con,$sq);
if($p)
{
	echo "<script>alert(' Successfully inserted one row');</script>";
}
else
{
echo " Error";
}

?>
