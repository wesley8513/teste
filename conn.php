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
		
		//checar se banco existe
		$exist="SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = 'teste'";
		if(!$exist)
			$exist="CREATE DATABASE IF NOT EXISTS <teste>";
			$q=mysqli_query($conn, $exist);

			//checar essa validação (criou a tabela, mas e o banco?)

