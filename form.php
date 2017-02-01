<!DOCTYPE html>
<html>
<head>
	<title> Form Demo</title>
	<style type="text/css">
			
			table,tr,td
			{
				border:1px black solid;
				border-collapse: collapse;
			}

	</style>

</head>
<body>


<a href="action.php?id=1&name=abc">Link to action page</a>

<form name="form1" id="form1" action="action.php" method="POST"  >
	<center>
	<table width="400px">
		<tr>
			<td> Name</td>
			<td>
				<input  type="text" name="name" id="name" placeholder="Enter your name here"  >
			</td>
		</tr>
		<tr>
			<td>Password</td>
			<td>
				<input type="password" name="password" placeholder="Enter your password here"  >
			</td>
		</tr>
		<tr>
			<td>Address</td>
			<td>
				<textarea name="address" ></textarea>
			</td>
		</tr>
		<tr>
			<td>City</td>
			<td>
				<select name="city" >
					<option value="">--select City--</option>
					<option value="1" >A.bad</option>
					<option value="2"  >Pune</option>
					<option value="3"  >Mumbai</option>	
				</select>
			</td>
		</tr>
		<tr>
			<td>Gender</td>
			<td>
				<input type="radio" name="gender" value="MALE"  > MALE
				<input type="radio" name="gender" value="FEMALE" > FEMALE
			</td>
		</tr>
		<tr>
			<td>Hobby</td>
			<td>
				<input type="checkbox" name="SPORT" value="SPORT" > SPORT
				<input type="checkbox" name="DANCE" value="DANCE"   > DANCE
				<input type="checkbox" name="SINGING" value="SINGING"> SINGING

			</td>
		</tr>
		<tr>
			<td>Hobby</td>
			<td>
				<input type="checkbox" name="hobby[]" value="SPORT" > SPORT
				<input type="checkbox" name="hobby[]" value="DANCE"   > DANCE
				<input type="checkbox" name="hobby[]" value="SINGING"> SINGING
				<input type="checkbox" name="hobby[]" value="PAINTING"> PAINTING

			</td>
		</tr>

		<tr>
			<td colspan="2">
				<input type="button" name="" value="BUTTON">
				<input type="submit" name="" value="SUBMIT">
				<input type="reset" name="" value="RESET">
			</td>
		</tr>
	</table>
	</center>
</form>


</body>
</html>	