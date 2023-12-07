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
$s="select*from stud";
$q=mysqli_query($con,$s);
if(mysqli_num_rows($q))
{
	echo "<table><tr><th>rollno</th><th>name</th><th>mark</th></tr>";
	while($row=mysqli_fetch_assoc($q))
		{   echo "<tr>";
		    echo "<td>".$row['rollno']."</td>";
		    echo "<td>".$row['name']."</td>";
		    echo "<td>".$row['mark']."</td>";
                    echo"</tr>";
		}
echo "</table>";
}
else
{
  echo " Empty";
}

?>
