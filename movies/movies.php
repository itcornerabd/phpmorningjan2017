<?php 
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

<hr>
<button id="btnyellow" class="btn">yellow</button>
<button id="btnblue"  class="btn">blue</button>
<button id="btnred"  class="btn">red</button>

<br><br><br>
</center>

</body>
</html>

<script type="text/javascript" src="./../jquery.js"></script>

<script type="text/javascript">
	
	//$("tr:eq(0)").addClass('yellow');		

	//$("tr:contains(Comedy)").addClass('yellow');	

	//$("td:contains(Comedy)").parent().addClass('yellow');


	// $("tr:odd").addClass('yellow');
	// $("tr:even").addClass('blue');
	//index wise starts from 0 irrespective of parent 


	// $("tr:nth-child(odd)").addClass('yellow');
	// $("tr:nth-child(even)").addClass('blue');

	// index starts from 1

// $("#btnyellow").click(function() {

// 	$("table").removeClass('blue');
// 	$("table").addClass('yellow')
// })

// $("#btnblue").click(function() {

// 	$("table").removeClass('yellow');
// 	$("table").addClass('blue');

// })


$(".btn").click(function() {

	$("table").removeClass();
	var clsname = $(this).html();
	console.log(clsname);
	$("table").addClass(clsname);	

})




</script>	













<?php require ("./include/closestr.php");  ?>