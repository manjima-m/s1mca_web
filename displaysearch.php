<?php
$con=mysqli_connect("localhost","root","cetmca","student1");
$n=$_POST['query'];
$s="select * from stud where rollno=$n";
$q=mysqli_query($con,$s);

if(mysqli_num_rows($q))
{
 echo "<table border=1px><th>rollno</th><th>name</th><th>mark</th>";
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


