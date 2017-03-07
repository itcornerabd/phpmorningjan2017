<?php 

	/**
	* 
	*/
	class Connection 
	{	
		public $pdo;
		
		function __construct()
		{
			$this->pdo = new PDO('mysql:hostname=localhost;dbname=db_movie','root','');
		}

		public function getall($table,$classname)
		{

			$statement = $this->pdo->prepare("select * from $table ");

			$statement->execute();

			$result = $statement->fetchall(PDO::FETCH_CLASS, $classname);

			return $result;

		}

	}









 ?>