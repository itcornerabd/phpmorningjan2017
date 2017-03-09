<?php 
include '../include/constr.php';

$category_id = input('category_id');
if(empty($category_id)  || ($category_id=="0") )
{
	echo json_encode( ['status'=>'error' , 'errormsg'=> 'invalid category id ' ]);
	exit();
}	



$statement = $pdo->prepare('SELECT * FROM `movies` where category_id =  ? ');

$statement->execute([$category_id]);


$movies=  $statement->fetchall();


if(count($movies)>0)
	echo json_encode( ['status'=>'success' , 'data'=> $movies ]);
else
	echo json_encode(['status'=>'error' , 'errormsg'=> 'no data found']);


 ?>

