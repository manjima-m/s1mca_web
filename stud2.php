<?php
$con=mysqli_connect('localhost','root','cetmca','student1');
if ($con)
{
echo "Enetered marks successfully!!!";
}
else
{
echo "Connection Failed";
}
$ktuid=$_POST['ktuid'];
$semester=$_POST['semester'];
$subject=$_POST['subject'];
$series1=$_POST['series1'];
$series2=$_POST['series2'];
$assignment=$_POST['assignment'];
$attendance=$_POST['attendance'];
$sql="INSERT INTO marksentry (ktuid,semester,subject,series1,series2,assignment,attendance) VALUES ('$ktuid',$semester,'$subject',$series1,$series2,$assignment,$attendance)";
$p=mysqli_query($con,$sql);
if($p)
{
 	echo "<script>alert('Marks entered successfully!!');</script>";
} else {
	echo "ERROR";
}
?>
