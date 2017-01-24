<?php 

	$a=15;

	if($a>=10)
	{
		$b="asdad";
	}	

	if(isset($b)) // return true when var is defined otherwise false
		echo $b;
	else
		{
			echo " b is not defined";
			//exit(1);
			die(" error occured");
		}

	if(is_int($b))
		echo "<br> b is integer";
	else
		echo "<br> b is not integer";

	if(is_numeric($b))
		echo "<br> b is numeric";
	else
		echo "<br> b is not numeric";


	//is_float()  is_string( ) is_array(var) is_bool(var)	 

 ?>