<?php 

	$fruits =  [
				['name'=>'Mango','rate'=>40 , 'Quantity'=>10 ],
				['name'=>'Apple','rate'=>50 , 'Quantity'=>20 ],
				['name'=>'Orange','rate'=>20 , 'Quantity'=>15 ]
			  ];

	foreach ($fruits as   $fruit) 
	{
			foreach ($fruit as $property => $value) {
				
				echo " $property is $value";
				
			}
			echo "<br>";
	}				


	foreach ($fruits as   $fruit)
	 {
		echo "Name is ".$fruit['name'];
		echo " Rate is Rs. ".$fruit['rate'] . "/-";
		echo " Quantity is ".$fruit['Quantity'] . "in number <br>";
	}

 ?>