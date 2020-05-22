<?php
include('conn.php');

	$servico = $_POST['servico'];

	//fetching by a keyword using the operator 'LIKE'.
	$sql="SELECT * FROM servicos WHERE servico LIKE '".$servico."%'";
	$result=mysqli_query($conn, $sql);
	

		while($row =mysqli_fetch_assoc($result)){
			$servico = $row['servico'];
			$login= $row['login'];
			$senha= $row['senha'];

			echo "Serviço: ".$servico."<br />";
			echo "Login: ".$login."<br />";
			echo "Senha: ".$senha."<br />";
			echo "<br />";
		}

		//falta query de alterar registro
		//arrumar layout (mover query de busca para a mesma página do cadastro ou popup (bootstrap ?))

?>

<html>
	<body>
		<br>
		<a href="cadastro.html">Voltar</a>
	</body>
		<div class="footer">
  			v0.1.3 (Beta)
  		</div>
</html>



	



	
