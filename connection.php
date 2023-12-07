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
$sq="insert into stud values(7,'Abhiram',80)";
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

