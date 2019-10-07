<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="doRegister.php">
	<table>
		<tr>
			<td>name</td>
			<td><input type="text" name="txtName"></td>
		</tr>
		<tr>
			<td>country</td>
			<td>
				<select name="cbCourse">
					<option value="C#">C#</option>
					
					<option value="Java">java</option>
					<option value="Cloud">clould</option>
					
				</select>
			</td>
		</tr>
		<tr>
			<td>data of birth</td>
			<td><input type="date" name="dob"/></<td>
		</tr>
		<tr>
			<td>gender</td>
			<td>
				<input type="radio" name="gender" value="male">male
				<input type="radio" name="gender" value="female">female
			</td>
		</tr>
		<tr>
			<td>favorites</td>
			<td>
				<input type="checkbox" name="book" value="book">book
				<input type="checkbox" name="music" value="book">music
				
			</td>
		</tr>
	</table>
	
</form>
</body>
</html>