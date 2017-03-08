<!DOCTYPE html>
<html>
<head>
	<title>Ajax </title>
	<link rel="stylesheet" type="text/css" href="../table.css">
</head>
<body>

<center>
<table width="700px">
	<tr>
		<td>
			<ul>
				<li>
				<a href="#" id="linka">	A </a>
				</li>
				<li>
					<a href="#" id="linkb">	B</a>
				</li>
				<li>
					<a href="#" id="linkc">	C</a>
				</li>
				<li>D</li>
			</ul>	
		</td>
		<td>
			<div id="words">
				
			</div>
		</td>
	</tr>
</table>
</center>


</body>
</html>

<script type="text/javascript" src="../jquery.js"></script>

<script type="text/javascript">
	$("#linka").click(function() {

			$("#words").load('a.php')
	})


	$("#linkb").click(function() {

		var getdata = { 'letter':'B' };

		$.get('b.php',getdata, function(response) {

			$("#words").html(response);


		})

		console.log('after get method');


	})


	$("#linkc").click(function() {

		var postdata = {'letter':'C'};

		$.post('c.php',postdata,function(response) {

			console.log(response);
			$("#words").html(response);

		})

	})

</script>










