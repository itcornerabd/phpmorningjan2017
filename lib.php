<?php 

	$fruits =['Mango', 'Orange','Apple','Pinapple'];

	$size = count($fruits);

	echo "size is $size ";
	var_dump($fruits);

	var_dump(in_array("strawberry", $fruits));
	var_dump(array_search("strawberry", $fruits));

	if(in_array("Apple", $fruits))
			echo "present";
		else
		echo "absent";

	if(array_search("asd", $fruits)>-1)
			echo "present";
		else
		echo "absent";

	//sort($fruits); //sort in asc order index will reaarange

	//asort($fruits); // sort asc order , index willbe preserved

	arsort($fruits);

	var_dump($fruits);
	krsort($fruits);

	var_dump($fruits);

 ?>