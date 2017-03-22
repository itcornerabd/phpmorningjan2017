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
		html +=movie.name + ' <div class="pull-right"> <a href="#" class="editmovie"  data-id="'+movie.id+'" ><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>  </a> </div> '
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
	var url;
	if($("#action").val()=="SAVE")
		url = "add_movie.php"
	else if ($("#action").val()=="UPDATE")
		url = "updatemovie.php";
	else
		return false;	

	$.post('./api/'+url , postdata, function(response) {

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

$("#btnadd").click(function() {


$("#name").val('')
$("#cast").val('')
$("#release_date").val('')
$("#plot").val('')
$("#category_id").val('')
$("#action").val('SAVE');
$("#id").val(0);

$("#myModal").modal('show');

})

$("body").on('click' , '.editmovie' ,function(event) {
	var movieid = $(this).attr('data-id');
	console.log(movieid);
	event.preventDefault();
	
	var getdata = {'id':movieid};

	$.getJSON('./api/movie.php' ,getdata,function(response) {

		if(response.status!="success")
		{
			alert('some error occured');
			return false;
		}

		$("#name").val(response.data.name)
		$("#cast").val(response.data.cast)
		$("#release_date").val(response.data.release_date)
		$("#plot").val(response.data.plot)
		$("#category_id").val(response.data.category_id)
		$("#action").val('UPDATE');
		$("#id").val(movieid);
		
		$("#myModal").modal('show');	
	})

})

