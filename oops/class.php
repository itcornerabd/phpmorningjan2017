<?php 


class movie
{
	private $name , $cast , $release_date;

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

}

class comedy extends movie
{
	private $plot;

	public function __construct($plot='')
	{
		$this->plot=$plot;
	}

}






	$movie = new comedy('Kabil','Hritik','2015-2-14');

	// $movie->name ='Kabil';
	// $movie->cast= 'Hritik'; 
	// $movie->release_date='2015-2-14';
	//$movie-> setname('Kabil');

	echo "name is ".$movie->getname();
	
	echo "<pre>";
	var_dump($movie);
	echo "</pre>";





 ?>