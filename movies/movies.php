<?php require ("./include/constr.php");  ?>


<!DOCTYPE html>
<html>
<head>
	<title>Movies List</title>
	<link rel="stylesheet" type="text/css" href="./css/table.css">
</head>
<body>
<center>
<table width="700px" >
	<tr>
		<th>id</th>
		<th>name</th>
		<th>Cast</th>
		<th>Release Date</th>
		<th>Category</th>
		<th>Details</th>
	</tr>
<?php 
	$query = "select  m.* , c.name as categoryname  from  movies as m  , categories as c  where m.category_id = c.id";

	$rows = mysqli_query($con,$query); 

	if(!$rows)
		die("error in fetching movies 101 ");

	while($rs=mysqli_fetch_array($rows)):	

 ?>
	<tr>
		<td><?=$rs['id']?></td>
		<td><?=$rs['name']?></td>
		<td><?=$rs['cast']?></td>
		<td><?=$rs['release_date']?></td>
		<td><?=$rs['categoryname']?></td>
		<td>
		<a href="detail.php?id=<?=$rs['id']?>">	Details</a>
		</td>
	</tr>

<?php endwhile ?>
</table>
</center>

</body>
</html>



<?php require ("./include/closestr.php");  ?>