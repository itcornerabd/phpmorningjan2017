<?php 
session_start();
	
	$con=@mysqli_connect("localhost","root","","db_movie" );

	//var_dump($con);
	if(!$con)
		die("erron in connection");


$url =  $_SERVER['REQUEST_URI'];

$pathinfo = pathinfo($url);

if($pathinfo['filename']=="login")
{
	if(isset($_SESSION['username']))
		header("location:movies.php");
}	
else
{
	if(!isset($_SESSION['username']))
		header("location:login.php");
}



	function input($control,$is_string=true)
	{
		global $con;
		if(isset($_REQUEST[$control])) 
			return mysqli_escape_string($con , $_REQUEST[$control]);
		else
			{
				if($is_string)
					return "";
				else
					return [];
			}	
	}

	
 ?>