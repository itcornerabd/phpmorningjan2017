<!DOCTYPE html>
<html>
<head>
	<title>Timer demo</title>
</head>
<body>


	<input type="button" name="" id="btn1" value="Button 1" onclick="callalert()">
	<br><br>
	<hr>
	<button id="start" onclick="start()" >Start</button>
	<button id="stop" onclick="stop()">Stop</button>
	<div id="timer">100</div>

</body>
</html>

<script type="text/javascript">
	function callalert() 
	{

		setTimeout(function () {

			alert('hello world');
						
		},3000)


		//alert('Button is clicked');
		
	}


	// function() {}

	var i=5,t;
	var min,sec
	function start() 
	{

		t=setInterval(function() {

		//i = parseInt(document.getElementById('timer').innerHTML);
		i--;
		min = parseInt(i/60);
		sec = i%60

		document.getElementById('timer').innerHTML= min + " min and " + sec + " sec remaining " ;	
		if(i==0)
			clearInterval(t);
		

		},1000)



	}	

	function stop() {
		
		clearInterval(t);
	}

</script>
