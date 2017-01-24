<?php 
	error_reporting(E_NOTICE);	
	//E_ERROR - only fatal error
	//0 - no error will display 

	//Parse error : syntax error 
	//Notice :  
	//Warning :
	//Fatal error :


	define("PI", 3.14);	
	$a=10;
	$b=0;

	$c = $a/$b;

	echo $c;

	$a+=10; //	$a= $a+10;

	echo "<br> $a";

	$d= $a++ + ++$a ;//   ++a  21 d=a+a  a++ 22

	echo "<br> $a";
	echo "<br> $d";

	$str1 = "Hello";
	$str2 = "world";
	//echo $str1.$str2 ;
	echo " $str1 $str2 ";
	echo PI;



 ?>