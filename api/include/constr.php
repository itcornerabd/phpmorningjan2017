<?php 
		
	$pdo = new PDO('mysql:hostname=localhost;dbname=db_movie','root','');

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