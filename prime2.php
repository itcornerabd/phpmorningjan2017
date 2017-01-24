<?php 

	$no=25;
	
	for ($i=2; $i <=($no/2) ; $i++) 
	{ 
		if($no%$i==0)
			{
				echo " <br>$no is divisble by $i";
				$is_prime=false;
				echo "<br> no is not prime";
				break;
			}
			else
			{
				echo "<br> no is prime";
			}
	}


 ?>