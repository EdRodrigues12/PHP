<?php
include("../inc/conexao.php");
	if(!isset ($_POST['Nome'])){
		if($_POST['TNome'] != "" && $_POST['TSenha'] !=""){ 
			
			$Senha=md5($_POST ['TSenha']);
			$StrLogin = "SELECT `Nome`, `Senha` FROM `tb_senha` WHERE `Nome` = '" . $_POST['TNome']. "' AND `Senha` ='" . $Senha . "';";
			$SqlLogin=mysql_query($StrLogin);
			$cod=mysql_num_rows($SqlLogin);
			
		if($cod>0 ){
			header("location:sistema.php?Funcao=");
			
			echo"<script> alert('Acesso Permitido') ;</script>";
			}
		
		else{
			echo"<script> alert('Acesso Negado!'); </script>";
			
			}
			
		}
	}
?>
<html>

<head>

<link rel="stylesheet" type="text/css" href="../css/style.css" >
		
	<title>Sistema</title>

</head>

<body>
<form name="Forme" method="POST">									
										
										<div class="meuestilo">Sistema</div>
										
<br />										
<fieldset>
	
			<div class="nome">Nome:
			<input type = " text" name="TNome" ID="nome" size= "30">
			</div>	
				
				<br />
				<br />
			<div class="nome">Senha:
			<input type = "password" name = "TSenha" ID = "senha" size = "30">
			</div>
			
				<br />
				<br />				
			<Input type="submit"  VALUE="OK"  >
			
	
		
</form>	
</body>
</html>