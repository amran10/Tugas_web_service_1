<?php


	define (DB_USER, "root");

	define (DB_PASSWORD, "root");

	define (DB_DATABASE, "test");

	define (DB_HOST, "localhost");

	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);


	if(!empty($_POST["name"])){


		foreach ($_POST["name"] as $key => $value) {

			$sql = "INSERT INTO tagslist(name) VALUES ('".$value."')";

			$mysqli->query($sql);

		}

		echo json_encode(['success'=>'Names Inserted successfully.']);

	}


?>