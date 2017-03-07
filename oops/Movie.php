<?php 

class movie
{
	private $name , $cast , $release_date;


	private $table = "movies";

	public function __construct($name='',$cast='',$release_date='')
	{
		$this->name = $name;
		$this->cast = $cast;
		$this->release_date = $release_date;		
	}

	public function getname()
	{
		return $this->name;
	}

	public function setname($name='')	
	{
		$this->name = $name; 
	}

	public function save()
	{
		//insert query 

	}

	public static function getall($con)
	{
		return $con->getall('movies','Movie');
	
	}

}
	
	


?>
