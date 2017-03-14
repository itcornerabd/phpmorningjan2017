<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Home Page</title>

    <!-- Bootstrap -->
    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/bootstrap.theme.min.css" rel="stylesheet">

    <style type="text/css">
    	body
    	{
    		margin-top: 50px;
    	}	
    	.categorydiv
    	{
    		margin-bottom: 10px;
    	}
    </style>
   
  </head>

<body>

<div class="container">
	<div class="row">
		<div class="col-md-3">
				
			<div class="row" id="categories">
						
				<div class="col-md-12 categorydiv">
					<button class="btn btn-info">Comedy</button>	
				</div>
			</div>

		</div>	
		<div class="col-md-9" id="movieslist">
			
		</div>

	</div>	


</div>	


</body>
</html>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="./js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./js/bootstrap.min.js"></script>

 <script type="text/javascript">
 var html ='';	
 $.getJSON('./api/categories.php' ,function(response) {

 	//console.log(response);
 	if(response.status!="success")
 	{
 		alert('Some Error Occured');
 		return false;
 	}

 	html='';

 	$.each(response.data, function(index,category) {
	
 	html+='<div class="col-md-12 categorydiv"><button class="btn btn-primary btncategory "  data-id="'+category.id+'" >'+category.name+'</button></div>'	

 	})

 	$("#categories").html(html);	



 })

// $(".btncategory").click(function() {
// 	alert('btn clicked');
// })

$("body").on('click','.btncategory',function() {

 var categoryid = $(this).attr('data-id')

 var getdata = {'category_id':categoryid};

 $.getJSON('./api/movies.php',getdata,function(response) {

 	console.log(response);
 	if(response.status!="success")
 	{
 		$("#movieslist").html('<h3>'+ response.errormsg +'</h3>');
 		return false
 	}

 	html='';

 	$.each(response.data,function(index,movie) {

 		html +='<div class="panel panel-info">'
		html +='<div class="panel-heading">'
		html +=movie.name
		html +='</div>'
		html +='<div class="panel-body">'
		html +=movie.cast;
		html +='</div>'
		html +='</div>'
			

 	})
 	$("#movieslist").html(html);

 })	


})



 </script>   

