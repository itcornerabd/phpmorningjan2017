<?php 
	
	//pdo php data objects

	//1. statements prepared 
	//2 . sql inection 


	$pdo = new PDO('mysql:hostname=localhost;dbname=db_movie','root','');
	
	$statement = $pdo->prepare('select * from categories ');

	$statement->execute();

	$result = $statement->fetchall();

	echo "<pre>";
	var_dump($result);






 ?>