<?php 
	require 'Connection.php';
	require 'Movie.php';
	require 'Category.php';


	$con = new Connection();

	$movies  = Movie::getall($con);


	var_dump($movies);


 

 ?>