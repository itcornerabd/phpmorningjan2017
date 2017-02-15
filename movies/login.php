<?php
session_start();
require './include/constr.php';

$login = input('login');
$login = mysqli_escape_string($con,$login);



$username =input('username');
//$username = mysqli_escape_string($con,$username);
$password=input('password');
//$password = mysqli_escape_string($con,$password);


if(!empty($login))
{
	$query = "select * from users where username ='$username' and password = '$password' ";

	$rows = mysqli_query($con,$query);

	if(!$rows)
		die("error in fetching data");

	if($rs=mysqli_fetch_array($rows))
	{
		$_SESSION['username']=$username; 
		header("location:movies.php");
	}
	else
	{
		echo "Username or password is invalid";
	}

}



 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="./css/table.css">
</head>
<body>

<center>
<form method="POST" action="login.php">
		<table width="500px">
			<tr>
				<td>username</td>
				<td><input type="text" name="username" required placeholder="Username"></td>
			</tr>
			<tr>
				<td>password</td>
				<td><input type="text" name="password" required placeholder="Password"></td>
			</tr>
			<tr>
				<td colspan="2" align="center"> 
					<input type="submit" name="login" value="Login">
				</td>
			</tr>
		</table>
</form>
</center>


</body>
</html>
<?php 
require './include/closestr.php';

 ?>