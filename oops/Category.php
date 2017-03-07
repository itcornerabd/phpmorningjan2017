<?php 

class Category
{
	private $id ,$name;

	public function getname()
	{
		return $this->name;
	}

	public function setname($name='')
	{
		$this->name=$name;
	} 

	static public function getall()
	{
		
	}

}



 ?>