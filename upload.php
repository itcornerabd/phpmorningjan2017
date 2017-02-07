<?php 

	$uploadfolder = "./upload/";



	if(isset($_FILES['image']))
	{	

		$tmp_name =$_FILES['image']['tmp_name'];
		$filename = $_FILES['image']['name'];

		$path = $uploadfolder.$filename;

		$i=0;

		while(file_exists($path))
		{
			$i++;
			//echo "file exists";
			 $pathinfo = pathinfo($filename);

			 $newfilename = $pathinfo['filename'] . "$i." . $pathinfo['extension'];

			 $path = $uploadfolder . $newfilename;
			 

		}	



			move_uploaded_file($tmp_name, $path );
			echo "file uploaded";
			
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