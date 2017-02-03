<?php 
	if(isset($_FILES['image']))
	{	
		echo "<pre>";
		var_dump($_FILES);
		echo "</pre>";
	
		echo $_FILES['image']['name'];
	
		echo $_FILES['image']['tmp_name'];

		move_uploaded_file($_FILES['image']['tmp_name'], "./upload/".$_FILES['image']['name'] );
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>File Upload</title>
</head>
<body>
<form name="uploadform" id="uploadform" method="POST" enctype="multipart/form-data" >
	Select File  <input type="file" name="image">
	<br><br>
	<input type="submit" name="" value="upload">	
</form>


</body>
</html>