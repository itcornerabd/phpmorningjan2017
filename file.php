<?php 

	$filename=	"desert.jpg"; //  "desert1.jpg" 

	// $pathinfo= pathinfo($filename);

	// var_dump($pathinfo);


	// echo $pathinfo['filename'] . "1."  . $pathinfo['extension'];

	if(file_exists("./upload/asdasddesert.jpg"))
	{
		echo "file exits";
	}
	else
	{
		echo "not exists";
	}

	// 1 mb =1024 kb =   < 2*1024*1024

 ?>

