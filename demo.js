	document.write ("Hello world");
	var i=10;
	var j=20;
	var k = i+j;
	// if switch for while do fun
	document.write (k);


function fun1() 
{
	var txt1 = document.getElementById('txt1').value
	var txt2 = document.getElementById('txt2').value

	txt1 = parseInt(txt1);
	txt2 = parseInt(txt2);	

	var txt3 = txt1+txt2;

	document.getElementById('txt3').value = txt3;
	//document.getElementById('div1').innerHTML= "<a href='demo.php'> hello world</a>";
	document.getElementById('div1').innerHTML = "<h1>"+txt3+"</h1>";


	var div1 = document.getElementById('div1').innerHTML;	

	// alert (txt1); 
}