<?php require('./include/constr.php'); ?>

<?php 

	// var_dump($_POST);
	


	$submit = input('submit');
	$name = input('name');
	$cast = input('cast');
	$release_date = input('release_date');
	$plot =input('plot');
	$category_id = input('category_id');


	$errormsg = [];
	if(!empty($submit))
	{
		if(empty($name))
			$errormsg[] =  "name can not be blank";
		if(empty($cast))
			$errormsg[]= "cast can not be blank";

		if(empty($category_id))
			$errormsg[]= "category can not be blank";

		if(count($errormsg)==0)
		{
			$query = "insert into movies (name,cast	,release_date,plot,category_id) values ('$name','$cast','$release_date','$plot' , $category_id ) ";

			$result = mysqli_query($con,$query);

			if(!$result)
				die("some error occured in inertion".mysqli_error($con));
			else
				header("location:movies.php");


		}
	}


 ?>




<!DOCTYPE html>
<html>
<head>
	<title>Add Movie</title>
	<link rel="stylesheet" type="text/css" href="./css/table.css">
</head>
<body>

<?php foreach ($errormsg as $key => $error): ?>
		<li><?=$error?></li>
<?php endforeach ?>

<center>
<form method="POST" action="addmovie.php">	
<table width="500px">
	<tr>
		<td>Name</td>
		<td>
			<input type="text" name="name" id="name" value="<?=$name?>">
		</td>
	</tr>
	<tr>
		<td>
			Cast
		</td>
		 <td>
		 	<input type="text" name="cast" value="<?=$cast?>">
		 </td>	
	</tr>
	<tr>
		<td>Release Date</td>
		<td>
			<input type="date" name="release_date">
		</td>
	</tr>
	<tr>
		<td>Plot</td>
		<td>
			<textarea name="plot"></textarea>
		</td>
	</tr>
	<tr>
		<td>Category</td>
		<td>
			<select name="category_id">
				<option value="">--select category--</option>
				<?php 
					$query  = "select * from categories ";
					$rows = mysqli_query($con,$query);
					if(!$rows)
						die("Error in feching");
					while($rs=mysqli_fetch_array($rows)):

						$selected = "";
						if($category_id==$rs['id'])
							$selected = "selected";


				 ?>
				<option value="<?=$rs['id']?>" <?=$selected ?>  ><?=$rs['name']?> </option>
				<?php endwhile ?>

			</select>
		</td>	
	</tr>
	<tr>
		<td colspan="2" align="center">
			<input type="submit" name="submit" value="SAVE">
		</td>
	</tr>
</table>
</form>

</center>


</body>
</html>
<?php require('./include/closestr.php'); ?>