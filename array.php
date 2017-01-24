<?php 
	
	$fruits =['Apple','Mango', 'Orange','Pinapple'];
			//= array( 'Apple' ,..... )	

	var_dump($fruits);
	print_r($fruits);	

	//echo $fruits[4];	

	$size = count($fruits);

	echo "size of array is $size";

	for ($i=0; $i < $size; $i++) 
	{ 
				
				echo "<br>".$fruits[$i];
		}	

		//associative array
	$person = [ 'name'=>'Dhiraj' , 'contact'=> '0240123123' ,'location'=> 'Aurangabad', 'vehicleReg' =>'6500'  ]; 	

	var_dump($person);

	$size= count($person);

	foreach($person as $index => $value)
	{
		echo "<br> $index is $value";
	}	










 ?>