<?php


	define (DB_USER, "root");
	define (DB_PASSWORD, "root");
	define (DB_DATABASE, "test");
	define (DB_HOST, "localhost");
	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);


	if(!empty($_POST["name"])){
		
		
		$dept 		= $_POST["department"];
		$experience 	= $_POST["experience"];
		$salary 	= $_POST["salary"];
		$status 	= $_POST["status"];
		
		foreach ($_POST["name"] as $key => $value) {
		echo	$sql = "INSERT INTO employee(name, dept_id, experience, salary, status) VALUES ('".$value."','".$dept[$key]."', ".$experience[$key].", ".$salary[$key].", ".$status[$key].")";
			$mysqli->query($sql);
		}
	die('testing');
		echo json_encode(['success'=>'Names Inserted successfully.']);
	}


?>
