<?php
include('conn.php');

	$servico = $_POST['servico'];

	$sql="SELECT * FROM servicos WHERE servico = '$servico'";
	$result=mysqli_query($conn, $sql);
	

		while($row =mysqli_fetch_assoc($result)){
			$servico = $row['servico'];
			$login= $row['login'];
			$senha= $row['senha'];

			echo "Serviço: ".$servico."<br />";
			echo "Login: ".$login."<br />";
			echo "Senha: ".$senha."<br />";
		}



	//adicionar validação para nome exato



	
