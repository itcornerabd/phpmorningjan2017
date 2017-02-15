<?php 
	
	$con=@mysqli_connect("localhost","root","","db_movie" );

	//var_dump($con);
	if(!$con)
		die("erron in connection");




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