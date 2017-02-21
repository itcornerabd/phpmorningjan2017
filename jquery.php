<!DOCTYPE html>
<html>
<head>
	<title>Jquery Demo</title>
	<style type="text/css">
			
	.red
	{
		background-color: red;
		color: black;
	}
	.yellow
	{
		background-color: yellow;
	}
	.blue
	{
		background-color: blue;
	}



	</style>

</head>
<body >

	this is page conetent

	<div>div1</div>
	<div class="cls" >div 2</div>
	<div>div 3</div>

	<span class="cls">span 1 </span>
	<span>span 2</span>

	<p>p 1</p>
	<p id="p2">2</p>	

</body>
</html>



<script type="text/javascript" src="./jquery.js"></script>

<script type="text/javascript">
	$(document).ready(function() 
		{
			//alert('hello');

			// $("div").addClass('red');
			// $("p").addClass('blue');
			// $("span").addClass('yellow');

			$(".cls").addClass("blue");

			$("#p2").addClass('red');

		});	
	

</script>
