<?php

include('conn.php');

$servico= $_POST['servico'];
$login= $_POST['login'];
$senha= $_POST['senha'];

$sql="INSERT INTO servicos (servico, login, senha) VALUES ('$_POST[servico]', '$_POST[login]', '$_POST[senha]')";
$res=mysqli_query($conn, $sql);

//continuar...