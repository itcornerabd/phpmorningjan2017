<?php 
	
	require ('Category.php');
	//pdo php data objects

	//1. statements prepared 
	//2 . sql inection 


	$pdo = new PDO('mysql:hostname=localhost;dbname=db_movie','root','');
	
	// $statement = $pdo->prepare('select * from categories ');

	// $statement->execute();

	// $categories = $statement->fetchall(PDO::FETCH_CLASS, 'Category');

	// foreach ($categories as $key => $category) {
	// 	echo $category->getname();
	// }

	// echo "<pre>";
	// var_dump($result);


	$name = "categor'y";

	$statement = $pdo->prepare('insert into categories (name) values (?) ');

	$result =  $statement->execute([$name]);
	$result =  $statement->execute(['new category again']);
	$result =  $statement->execute(['third time insert']);


	var_dump($result);




 ?>