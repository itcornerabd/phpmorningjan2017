<?php 

	interface pet 
	{
		public function talk();
	}



	class person
	{	
		private $name , $age;

		public $pet; 

		public function __construct($name='',$age='',$pet='')
		{
			$this->name= $name;
			$this->age  = $age;
			$this->pet=$pet;
		}		


		public function getname()
		{
			return $this->name;
		}

	}

	class dog implements pet
	{	
		private $name,$age;


		public function __construct($name='',$age='')
		{
			$this->name=$name;
			$this->age=$age;
		}

		public function getname()
		{
		 	return $this->name;
		}

		public function talk()
		 {
		 	return " bhow "; 
		 } 

	}

	class cat implements pet
	{	
		private $name,$age;


		public function __construct($name='',$age='')
		{
			$this->name=$name;
			$this->age=$age;
		}

		public function getname()
		{
		 	return $this->name;
		}

		public function talk()
		 {
		 	return " meow "; 
		 } 

	}




	$tommy = new cat('tommy',2);


	$abc= new person('abc',20,$tommy);

	//var_dump($abc);

	echo $abc->pet->talk();


 ?>