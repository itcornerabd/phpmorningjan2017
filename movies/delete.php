<?php require("./include/constr.php"); ?>


<?php 

	$ACTION = input('ACTION');
	$id = input('id');
	if(empty($id))
		die("Invalid Request");
	 
	//$query = "delete from movies where id =$id";


	if($ACTION=="DELETE")
		$query = "update movies set active =0 where id = $id ";
	else
		$query = "update movies set active =1 where id = $id ";


	$result = mysqli_query($con,$query);  

	if(!$result)
		die("error in deletion");

	header("location:movies.php");	


 ?>


<?php require("./include/closestr.php"); ?>
