<?php 
include '../include/constr.php';

$name = input('name');
$cast = input('cast');
$release_date= input('release_date');
$plot=input('plot');
$category_id=input('category_id');

$errormsg= [];

if(empty($name))
	$errormsg[] = "Please Enter Movie Name"; 

if(count($errormsg)==0)
{
	$statment = $pdo->prepare('insert into movies (name,cast,release_date,plot,category_id) values(?,?,?,?,?) ');

	$result =  $statment->execute([$name,$cast,$release_date,$plot,$category_id]);

	if($result)
		echo json_encode( ['status'=>'success'  ]);
	else
		echo json_encode( ['status'=>'error' , 'errormsg'=> 'Can not insert please try again' ]);

}
else
{
	echo json_encode(['status'=>'error' , 'errormsg'=> $errormsg[0] ]);
}


 ?>