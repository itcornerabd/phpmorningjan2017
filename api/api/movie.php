<?php 
include '../include/constr.php';

$id = input('id');
if(empty($id)  || ($id=="0") )
{
	echo json_encode( ['status'=>'error' , 'errormsg'=> 'invalid movie id ' ]);
	exit();
}	



$statement = $pdo->prepare('SELECT * FROM `movies` where id =  ? ');

$statement->execute([$id]);


$movie=  $statement->fetch(PDO::FETCH_ASSOC);


if(count($movie)>0)
	echo json_encode( ['status'=>'success' , 'data'=> $movie ]);
else
	echo json_encode(['status'=>'error' , 'errormsg'=> 'no data found']);


 ?>

