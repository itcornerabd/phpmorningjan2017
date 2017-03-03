<!DOCTYPE html>
<html>
<head>
	<title>Slider Demo</title>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<script type="text/javascript" src="./jquery.bxslider.min.js"></script>
	<link href="./jquery.bxslider.min.css" rel="stylesheet" />

</head>
<body>
<div style="width: 400px;height: 400px">
	<ul id="slider" >
	  <li><img src="./images/Jellyfish.jpg" title="Jelly Fish" /></li>
	  <li><img src="./images/Koala.jpg" title="Koala"  /></li>
	  <li><img src="./images/Lighthouse.jpg"  title="light house" /></li>
	  <li><img src="./images/Penguins.jpg" title="Penguins"  /></li>
	</ul>
</div>


</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){

  		$('#slider').bxSlider({
  			'mode':'fade',
  			'randomStart':true,
  			'captions':true
  		});
	
	});
</script>