<?php 
session_start();

require ("./include/constr.php");  

if(!isset($_SESSION['username']))
	header("location:login.php");

?>


<!DOCTYPE html>
<html>
<head>
	<title>Movies List</title>
	<link rel="stylesheet" type="text/css" href="./css/table.css">
</head>
<body>

Welcome <?php echo $_SESSION['username']; ?> 
<br>

<a href="logout.php">Logout</a>


<center>
<a href="addmovie.php">Add New Movie</a>	

<table width="700px" >
	<tr>
		<th>id</th>
		<th>name</th>
		<th>Cast</th>
		<th>Release Date</th>
		<th>Category</th>
		<th>Details</th>
		<th>Delete</th>
		<th>Edit</th>
	</tr>
<?php 
	$query = "select  m.* , c.name as categoryname  from  movies as m  , categories as c  where m.category_id = c.id ";

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
		<td>
			<?php if($rs['active']): ?>	
				<a href="delete.php?id=<?=$rs['id']?>&ACTION=DELETE">	Delete</a>
			<?php else: ?>
				<a href="delete.php?id=<?=$rs['id']?>&ACTION=REVERT">	Revert</a>
			<?php endif ?>
		</td>
		<td>
			<a href="editmovie.php?id=<?=$rs['id']?>">	Edit</a>
		</td>
	</tr>

<?php endwhile ?>
</table>
</center>

</body>
</html>



<?php require ("./include/closestr.php");  ?>