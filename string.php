<?php 
	
	$str = "Hello World";
	echo $str;
	$a=10;
	printf("String is %s %d",$str,$a);

	echo "<br> length of string is ". strlen($str);	

	echo "<br>".strpos($str, "World"); //case sensative
	// return position of string if found otheriwse false
	echo "<br>".stripos($str, "world"); 

	echo "<br>".strripos($str, "O"); 

	echo "<br>" . substr($str,6,3);

	echo "<br>".str_replace("World", "PHP", $str);//case sensative
	echo "<br>".str_ireplace("world", "PHP", $str);//case insensative

	$str2 = "Hello world";

	if(strcasecmp($str,$str2)==0)
		echo "<br> strings are equal";
	else
		echo "<br> strings are not equal";

	//strcmp case sensative
	//strcasecmp case insensative

	$name = "Ajay Motekar";

	$spacepos = strpos($name," ");	


	echo "<br> first name ". substr($name,0,$spacepos) ; 
	echo "<br> last name ".substr($name,$spacepos+1, strlen($name)-$spacepos);


	$fruits = ['Mango','Apple','Orange'];

	$str = implode(",", $fruits); //split join 

	echo "<br>".$str;	 
	$newfruits = explode(",", $str);
	var_dump($newfruits);

	$name = "Sachin Ramesh Tendulkar";

	$namearr = explode(" ", $name);

	var_dump($namearr);

	echo "<br> first name ". $namearr[0]; 
	echo "<br> last name ".$namearr[2];

	$date = "2017-01-19"; //  19/01/2017   
	$datearr = explode("-", $date);
	krsort($datearr);






 ?>