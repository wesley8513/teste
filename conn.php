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
		
		//checar se banco e tabela existem. Senão, criar.
		$sql="CREATE DATABASE teste";
		if($conn->query($sql) === TRUE){
			echo "Database created successfully";
		} 

		$sqlDB="CREATE table servicos (servico VARCHAR(255), login vARCHAR(255), senha vARCHAR(255), id INT PRIMARY KEY AUTO_INCREMENT)";
		if($conn->query($sqlDB) === TRUE){
			echo "Table created successfully";
		} 

		//$conn->close();
?>

