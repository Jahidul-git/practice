<?php 
	
	abstract class User{
		public $name;
		public $age;

		public function describe(){
			echo 'Name is '.$this->name.' and age is '. $this->age . '<br>';
		}

	}


 ?>