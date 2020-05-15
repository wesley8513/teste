<?php
include 'conn.php';



	

	$res=mysqli_query($conn, " select * from servicos where '$_POST[servico]'");
	$result=mysqli_result($res);


	while($rows=mysqli_fetch_assoc($result)){
		echo "Serviço: ".$rows["servico"]."<br />";
		echo "Login: ".$rows["login"]."<br />";
		echo "Senha: ".$rows["Senha"]."<br />";
		
	}

	//não funciona corrigir



	
