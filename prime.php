<?php 

	$no=24;
	$is_prime= true;

	for ($i=2; $i <=($no/2) ; $i++) 
	{ 
		if($no%$i==0)
			{
				//echo "$no is divisble by $i";
				$is_prime=false;
				break;
			}
	}

	if($is_prime)
		echo "no is prime";
	else
		echo "no is not prime";

 ?>