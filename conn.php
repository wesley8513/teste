<?php

	$servername = "localhost";
	$user = "root";
	$pass = "";
	$dbname ="teste";

		//cria conexão
		$conn = new mysqli($servername, $user, $pass, $dbname);

		//checar
		if($conn->connect_error)
			die("Conexão falhou." . $conn->connect_error);
		
		

