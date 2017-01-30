  /* span   element wise selector- select all span element 
		{
			background-color: yellow;
		}

		.cls /* class wise selector select element havong cls as class 
		{
			font-size: 24px;	
		}

		#div1 /*id wise selector select element having div1 as id 
		{
			color: blue;	
		}
		*/

		
/*
html,body,*
{
	font-family: Tahoma;
}
div,p   .cls,.cl1   #id1,#id2   p,.cls1,#ID 
{
	font-size: 15px;

}
ul li span
{
	background-color: yellow;
}
*/
/*#ID .cls 
*/

body
{
	/*background-color: #CCDEFF;*/
	/*background-color: rgb(125,55,25);
	*/
	/*background:url('./images/desert.jpg');
	background-repeat: no-repeat; repeat-x repeat-y
	background-size: 100% 100%;
	background-attachment: fixed; 
*/}
<?php header("Content-type:text/css"); 
	
	$bgcolor="yellow";
	
  ?>

div
{
	background-color:<?=$bgcolor;?>;
	height: 100px;
	width:200px;
	padding: 10px;
/*	padding-left: 10px;
	padding-right: 5px;*/

	/*padding: 10px 5px 15px 20px; */

	border: 1px black solid ;
	margin :10px;	
	float: left;
	overflow: auto; /* scroll;*/   /*hidden;*/	
}

#div3
{
	position: fixed /*absolute*/;
	bottom:200px;
	right: 100px;

	/*transform: rotate(56deg);
*/
	/*transform: skew(10deg,20deg);
*/
	transition: transform 5s , background-color 2s ;

}

#div3:hover
{
	background-color: red;	
	transform: rotate(180deg);
}






























