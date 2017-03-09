<?php 
include '../include/constr.php';



$statement = $pdo->prepare('SELECT * FROM `categories` ');

$statement->execute();


$categories=  $statement->fetchall();


if(count($categories)>0)
	echo json_encode( ['status'=>'success' , 'data'=> $categories ]);
else
	echo json_encode(['status'=>'error' , 'errormsg'=> 'no data found']);


 ?>

