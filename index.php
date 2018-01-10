<?php

	spl_autoload_register(function($className){
		include 'class/'.$className.'.php';
	});

	/* if(class_exists("Student")){
		$st = new Student();
		if(method_exists($st, "details")){
			$st->details();
		}else{
			echo "Method Not Exists <br/>";
		}
		
	}else{
		echo "Class Not Exists.";
	}*/
	class Userdata extends User{



	}

	/*$ab = new Userdata();
	$ab->name = "Belal";
	$ab->age = 22;
	$ab->describe();
*/
	$cal = new Calculation;
	echo 'Result is : '.$cal->getValue(3, 5)->getResult();

?>