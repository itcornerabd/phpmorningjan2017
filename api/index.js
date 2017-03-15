var html ='';	
 $.getJSON('./api/categories.php' ,function(response) {

 	//console.log(response);
 	if(response.status!="success")
 	{
 		alert('Some Error Occured');
 		return false;
 	}

 	html='';
 	var options=''
 	$.each(response.data, function(index,category) {
	
 	html+='<div class="col-md-12 categorydiv"><button class="btn btn-primary btncategory "  data-id="'+category.id+'" >'+category.name+'</button></div>'	
 	options+='<option value ="'+category.id+'" > '+  category.name +' </option>' 
 	})

 	$("#categories").html(html);	
 	$("#category_id").append(options);

 	$("#categories button:eq(0)").click();


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


$("#btnsave").click(function() {

	var postdata = $("#movieform").serialize();

	$.post('./api/add_movie.php' , postdata, function(response) {

		response= $.parseJSON(response);


		if(response.status!='success')
		{
			$("#errormsg").html(response.errormsg);
		}
		else
		{
			$("#myModal").modal('hide');
			alert('Movie Added Successfully');
			$("#categories button[data-id ='"+$("#category_id").val() + "' ]").click();
		}	

	})


})


