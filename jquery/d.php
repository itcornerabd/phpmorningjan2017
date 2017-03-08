 <?php

 //  [
// 	{
// 		"id":"1" , "word":"dog"	
// 	},
// 	{
// 		"id":"2" , "word":"doll"	
// 	},
// 	{
// 		"id":"1" , "word":"donkey"	
// 	}
// ]

 $words = [
 			['id'=>1 , 'word'=>'dog'],
 			['id'=>2 , 'word'=>'doll'],
 			['id'=>3 , 'word'=>'donkey'],
 			['id'=>4 , 'word'=>'desert']
 		  ];


 echo json_encode($words);		  

 ?>