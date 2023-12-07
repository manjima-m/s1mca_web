<html>
<head>
<title>Form design</title>
</head>
<body bgcolor="#87CEEB">
<h1 align="center"><font color="red"><marquee>WELCOME TO FRESHERS WORLD!!!</font></marquee></h1>
<div align="center">
<table border="1">
<caption><b>Registration Form</b></caption>
<form method="post" action="view.php">
<tr>
<td>Name</td>
<td><input type="text" name="name"></td>
</tr>
<tr>
<td>Age</td>
<td>
<select name="age" id="age">
	<option value="value" selected>Select</option>
	<option value="10-20">10-20</option>
	<option value="20-30">20-30</option>
	<option value="30-40">30-40</option>
	<option value="40-50">40-50</option>
</select></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="password"></td>
</tr>
<tr>
<td>Re-enter Password</td>
<td><input type="password" name="password"></td>
</tr>
<tr>
<td>Select your security question</td>
<td><input type="radio" name="security"><label for="security">What is your pet name?</label><br>
	<input type="radio" name="security"><label for="security">Who is your bestfriend?</label><br>
	<input type="radio" name="security"><label for="security">What is your favourite colour?</label><br>
	<input type="radio" name="security"><label for="security">Who is your favourite teacher?</label>
</td>
</tr>
<tr>
<td>Answer of Security question</td>
<td><input type="text" name="security"></td>
</tr>
<tr>
<td>Email id</td>
<td><input type="email" name="email"></td>
</tr>
<tr>
<td>Languages Known</td>
<td>
<input type="checkbox" name="check[]" value="Mal">
<label for="check1">Malayalam</label>
<input type="checkbox" name="check[]" value="eng">
<label for="check2">English</label>
<input type="checkbox" name="check[]" value="hin">
<label for="check3">Hindi</label>
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
<td><input type="tel" name="Homephone"></td>
<td><input type="tel" name="Officephone"></td>
</tr>
</table>
</td>
</tr>
<tr>
<td>Upload Cv</td>
<td><input type="file" id="myfile" name="myfile"></td>
</tr>
<tr>
<td>
<center>
<button type="submit" value="submit">Submit</button></center></td>
<td>
<center>
<button type="reset" value="reset">Reset</button></center></td>
</tr>
</table>
</div>
</body>
</html>

