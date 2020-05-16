<?php
include('conn.php');

	$servico = $_POST['servico'];

	$sql="SELECT * FROM servicos WHERE servico = '$servico'";
	$result=mysqli_query($conn, $sql);



//echo var_dump($result);
	

		while($row =mysqli_fetch_assoc($result)){
			$servico = $row['servico'];
			$login= $row['login'];
			$senha= $row['senha'];

			echo $servico;
			echo $login;
			echo $senha;
		}



	//não funciona corrigir



	
