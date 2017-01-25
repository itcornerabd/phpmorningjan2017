<?php 

	$fruits =  [
				['name'=>'Mango','rate'=>40 , 'Quantity'=>10 ],
				['name'=>'Apple','rate'=>50 , 'Quantity'=>20 ],
				['name'=>'Orange','rate'=>20 , 'Quantity'=>15 ]
			  ];

 ?>

<!DOCTYPE html>
 <html>
 <head>
 	<title>Table Demo</title>
 </head>
 <body>
 <?php if(count($fruits)>0): ?>
 <table border="1" align="center" width="400px">
 	<tr>
 		<th>Sr No</th>
 		<th>Name </th>
 		<th>Rate</th>
 		<th>Quantity</th>	
 	</tr>
 	<?php $i=1; ?>
 	<?php foreach( $fruits as $key=>$fruit): ?>	
 	 <tr>
 		<td><?=$i++; ?></td>
 		<td><?=$fruit['name']?> </td>
 		<td align="right">Rs <?=$fruit['rate']?> /-</td>
 		<td><?=$fruit['Quantity']?></td>	
 	</tr>
 	<?php endforeach ?>
 </table>
<?php else: ?>
 <center> No fruits Available</center>
<?php endif ?>

 </body>
 </html> 