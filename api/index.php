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
		
<button class="btn btn-lg btn-primary"  id="btnadd" >Add</button>

<hr>

	<div class="row">
		<div class="col-md-3">
				
			<div class="row" id="categories">
						
				
			</div>

		</div>	

		<div class="col-md-9" id="movieslist">
			
		</div>

	</div>	


</div>	


<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
        <form id="movieform" name="movieform">
        	
        	<div class="form-group">
        		<input type="text" name="name" id="name" placeholder="Enter Movie Name" class="form-control">
        	</div>
        	<div class="form-group">
        		<input type="text" name="cast" id="cast" placeholder="Enter Movie Cast" class="form-control">
        	</div>
        	<div class="form-group">
        		<input type="date" name="release_date" id="release_date" placeholder="Enter Movie Release Date" class="form-control">
        	</div>
        	<div class="form-group">
        		<textarea name="plot" class="form-control" id="plot" placeholder="Enter Movie Plot"></textarea>
        	</div> 
        	<div class="form-group">
        		<select name="category_id" id="category_id" class="form-control">
        			<option value="">--Select Category--</option>
        		</select>	
        	</div>
            <input type="hidden" name="action" id="action" value="SAVE">
            <input type="hidden" name="id" id="id" value="0" >
        	<div id="errormsg">
        		
        	</div>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" id="btnsave" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>





</body>
</html>

	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="./js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./js/bootstrap.min.js"></script>

 <script type="text/javascript" src="index.js">
 </script>   

