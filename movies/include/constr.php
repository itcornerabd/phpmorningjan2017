<?php 
	
	$con=@mysqli_connect("localhost","root","","db_movie" );

	//var_dump($con);
	if(!$con)
		die("erron in connection");




	function input($control,$is_string=true)
	{
		if(isset($_REQUEST[$control])) 
			return $_REQUEST[$control];
		else
			{
				if($is_string)
					return "";
				else
					return [];
			}	
	}

	
 ?>