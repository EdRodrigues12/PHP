<?php
	include("../inc/conexao.php"); 

	$senha1=md5("Teste");
	echo $StrUsuario1= "INSERT INTO `bd_cadastro`.`tb_senha`(`Nome`,`Senha`) VALUES ('teste','" . $senha1 . "');";
	$SqlUsuario1=mysql_query($StrUsuario1);
	
	$senha2=md5("123456789");
	echo $StrUsuario2= "INSERT INTO `bd_cadastro`.`tb_senha`(`Nome`,`Senha`) VALUES ('testando','" . $senha2 . "');";
	$SqlUsuario2=mysql_query($StrUsuario2);

?>