<!DOCTYPE html>
<html>
<head>
	<title>List Demo</title>
</head>
<body>



<?php 

	$fruits = ['Apple','Mango','Orange'];

 ?>


<ul>
	<?php 
	foreach ($fruits as $value)
		{ 
	?>
		<li>
		<?php echo $value;?>
		</li>
	<?php		
		}
	 ?>
</ul>

<?php 

	echo "<ul>";

	foreach ($fruits as   $fruit) 
	{
		echo "<li>";
		echo $fruit;
		echo "</li>";
	}
	echo "</ul>";
 ?>


<ul>
	<?php foreach ($fruits as $value) : ?>
		<li><?=$value;?></li>
	<?php endforeach ?>
</ul>

<?php 

 ?>






</body>
</html>
