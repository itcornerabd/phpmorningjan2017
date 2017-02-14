<?php 
require './include/constr.php';


	$id = input('id');


	$submit = input('submit');
	$name = input('name');
	$cast = input('cast');
	$release_date = input('release_date');
	$plot =input('plot');
	$category_id = input('category_id');
	//var_dump($_REQUEST);
	if(!empty($submit))
	{
		if(empty($name))
			$errormsg[] =  "name can not be blank";
		if(empty($cast))
			$errormsg[]= "cast can not be blank";

		if(empty($category_id))
			$errormsg[]= "category can not be blank";

		$query = "select * from movies where name ='$name' ";
		$rows = mysqli_query($con,$query);
		if(!$rows)
			die("some error occured");

		if($rs=mysqli_fetch_array($rows))
			$errormsg[]= "This name is already taken";



		if(count($errormsg)==0)
		{
			$query = "update movies set name ='$name' , cast ='$cast' , release_date ='$release_date' , plot ='$plot' , category_id='$category_id' where id=$id ";

			$result = mysqli_query($con,$query);

			if(!$result)
				die("some error occured in update".mysqli_error($con));
			else
				header("location:movies.php");


		}
	}





	if(empty($id))
		die("Invalid Request");

	$query = "Select * from movies where id=$id ";

	$rows = mysqli_query($con,$query);

	if(!$rows)
		die("error in fetching data");

	if($rs=mysqli_fetch_array($rows))
	{
		$name = $rs['name'];
		$cast =$rs['cast'];
		$release_date=$rs['release_date'];
		$plot = $rs['plot'];
		$category_id=$rs['category_id'];
	}	
	else
	{
		die("record not found");
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Movie</title>

	<link rel="stylesheet" type="text/css" href="./css/table.css">
</head>
<body>

<?php foreach ($errormsg as $key => $error): ?>
		<li><?=$error?></li>
<?php endforeach ?>


<center>

<form method="POST" action="editmovie.php">	
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
			<input type="date" name="release_date" value="<?=$release_date?>">
		</td>
	</tr>
	<tr>
		<td>Plot</td>
		<td>
			<textarea name="plot"><?=$plot?></textarea>
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
			<input type="hidden" name="id" value="<?=$id?>">
		</td>
	</tr>
</table>
</form>


</center>

</body>
</html>





 <?php require './include/closestr.php'; ?>