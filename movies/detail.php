<?php require("./include/constr.php"); ?>

<?php 

	$id= input('id');

	if(empty($id))
		die("Invalid Request");

	$query = "select  m.* , c.name as categoryname  from  movies as m  , categories as c  where m.category_id = c.id and m.id = $id";

	$rows = mysqli_query($con,$query);

	if(!$rows)
		die("fetching error");

	if($rs=mysqli_fetch_array($rows))
	{
		 $name = $rs['name'];
		 $cast =$rs['cast'];
		 $release_date =$rs['release_date'];
		 $plot =$rs['plot'];
		 $categoryname =$rs['categoryname'];
	}
	else
	{
		die("no such movie exits ");
	}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Movies detail</title>
	<link rel="stylesheet" type="text/css" href="./css/table.css">
</head>
<body>
<center>
		<table width="500px">
			<tr>
				<td>name</td>
				<td><?=$name?></td>
			</tr>
			<tr>
				<td>plot</td>
				<td><?=$plot?></td>
			</tr>
		</table>

</center>
</body>
</html>


<?php require("./include/closestr.php"); ?>