<?php
$name=$_POST['name'];
$age=$_POST['age'];
$security=$_POST['security'];
$email=$_POST['email'];
$lg=$_POST['check'];
$Homeph=$_POST['Homephone'];
$Office=$_POST['Officephone'];
?>
<html>
<head>
<title>Form design</title>
</head>
<body bgcolor="#87CEEB">
<h1 align="center"><font color="red"><marquee>WELCOME TO FRESHERS WORLD!!!</font></marquee></h1>
<div align="center">
<table border="1">
<caption><b>Registration Form</b></caption>
<tr>
<td>NAME</td>
<td><?php echo $name ?></td>
</tr>
<tr>
<td>AGE</td>
<td><?php echo $age ?></td>
</tr>
<tr>
<td>SECURITY ANSWER </td>
<td><?php echo $security ?></td>
</tr>
<tr>
<td>EMAIL ID</td>
<td><?php echo $email ?></td>
</tr>
<tr>
<td>LANGUAGES KNOWN</td>
<td>
<?php
foreach($lg as $lang)
{
echo $lang."<br>";
}
?>
</td>
</tr>
<tr>
<td>Phone Number</td>
<td>
<table>
<tr>
<th>HOME</th>
<th>OFFICE</th>
</tr>
<tr>
<td><?php echo $Homeph ?></td>
<td><?php echo $Office ?></td>
</tr>
</table>
</td>
</tr>
</table>
</div>
</body>
</html>

