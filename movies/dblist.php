<?php 
	//connect to database
	// query prepare
	// query execute
	// result process 
	//error_reporting(0);

	$con=@mysqli_connect("localhost","root","","db_movie" );

	//var_dump($con);
	if(!$con)
		die("erron in connection");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>List from Db</title>

	<link rel="stylesheet" type="text/css" href="table.css">
</head>
<body>
<ul>
<?php 

	$query = "select * from categories";

	$rows=mysqli_query($con,$query);
	if(!$rows)
		die("erorr in fetching data");

	while($rs = mysqli_fetch_array($rows))
	{
		echo  "<li>".  $rs['name'] . "</li>";
	}	
 ?>
</ul>


<table align="center" width="300px">
	<tr>
		<th>Id</th>
		<th>Name</th>
	</tr>
<?php 
	$query = "select * from categories ";

	$rows = mysqli_query($con,$query);
	if(!$rows)
		die("erorr in fetching data".mysqli_error($con));
	
	while($rs=mysqli_fetch_array($rows)):

 ?>
	<tr>
		<td><?=$rs['id'] ?></td>
		<td><?=$rs['name'] ?></td>
	</tr>
<?php
	endwhile
  ?>

</table>




</body>
</html>

<?php 
	mysqli_close($con);		
 ?>



 

