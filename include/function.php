<?php 
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
	


// input('name',true) // $_POST['name']  or ""
// input('hobby',false ) // $_POST]'hobby'] or []

 ?>