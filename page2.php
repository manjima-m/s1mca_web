
<html>
<body>
<form method="POST" action="stud2.php">
<center><h2>MARK ENTRY</h2></center>
<label for="ktuid">KTU ID : </label>
<select name="ktuid" id="ktuid">
<option value="select">SELECT</option>
<?php
$conn=mysqli_connect('localhost','root','cetmca','student1');
$q="SELECT ktuid FROM student2";
$r=mysqli_query($conn,$q);
if(mysqli_num_rows($r)>0)
{	
	while($row=mysqli_fetch_assoc($r))
	 {
		echo "<option value=".$row['ktuid'].">".$row['ktuid']."</option>";
	
	 }
}
?>
</select><br><br><br>
<label for="subject">Subject : </label>
<select name="subject" id="subject">
<option value="maths">Maths</option>
<option value="dfca">DFCA</option>
<option value="ads">ADS</option>
<option value="ase">ASE</option>
</select><br><br><br>
<label for="semester">Semester : </label>
<select name="semester" id="semester">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
</select><br><br><br>
<label for="series1">Series1 : </label>
<input for="text" name="series1" placeholder="enter your marks for series1"><br><br><br>
<label for="series2">Series2 : </label>
<input for="text" name="series2" placeholder="enter your marks for series2"><br><br><br>
<label for="assignment">Assignment : </label>
<input for="text" name="assignment" placeholder="Assignment marks"><br><br><br>
<label for="series2">Attendance : </label>
<input for="text" name="attendance" placeholder="attendance marks"><br><br><br>
<button type="submit">Submit</button>
</form>
</body>
</html>


