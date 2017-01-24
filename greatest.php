<?php 
	$a=100;$b=20;$c=3;

	if($a>$b)
	{
		if($a>$c)
			echo "a is greatest";
		else
			echo "c is greatest";
	}
	else
	{
		if($b>$c)
			echo "b is greatest";
		else
			echo "c is greatest";
	}

	echo "<br>";
	// && || !

	if (($a>$b) && ($a>$c))
		echo "a is greatest";
	elseif($b>$c)
		echo "b is greatest";
	else
		echo "c is greatest";

	echo "<br>";
	echo ($a>$b)? "a is greater": " b is greater";

	$d= ($a>$b)?$a:$b;







 ?>