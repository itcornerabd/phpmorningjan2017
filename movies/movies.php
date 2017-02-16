<?php 
session_start();

require ("./include/constr.php");  

if(!isset($_SESSION['username']))
	header("location:login.php");

	$query = "select  m.* , c.name as categoryname  from  movies as m  , categories as c  where m.category_id = c.id ";

	$rows = mysqli_query($con,$query); 

	if(!$rows)
		die("error in fetching movies 101 ");

	$movies = mysqli_fetch_all($rows,MYSQLI_ASSOC );



?>


<!DOCTYPE html>
<html>
<head>
	<title>Movies List</title>
	<link rel="stylesheet" type="text/css" href="./css/table.css">
</head>
<body>

<h1>Hello world</h1>



Welcome <?php echo $_SESSION['username']; ?> 
<br>

<ul>
	<?php foreach ($movies as $key => $movie) : ?>
		<li><?=$movie['name']?></li>
	<?php endforeach ?>	

</ul>



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
<?php foreach ($movies as $key => $movie) :
 ?>
	<tr>
		<td><?=$movie['id']?></td>
		<td><?=$movie['name']?></td>
		<td><?=$movie['cast']?></td>
		<td><?=$movie['release_date']?></td>
		<td><?=$movie['categoryname']?></td>
		<td>
		<a href="detail.php?id=<?=$movie['id']?>">	Details</a>
		</td>
		<td>
			<?php if($movie['active']): ?>	
				<a href="delete.php?id=<?=$movie['id']?>&ACTION=DELETE">	Delete</a>
			<?php else: ?>
				<a href="delete.php?id=<?=$movie['id']?>&ACTION=REVERT">	Revert</a>
			<?php endif ?>
		</td>
		<td>
			<a href="editmovie.php?id=<?=$movie['id']?>">	Edit</a>
		</td>
	</tr>

<?php endforeach ?>
</table>
</center>

</body>
</html>



<?php require ("./include/closestr.php");  ?>