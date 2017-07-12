<?php
	include("../inc/conexao.php");
	if(isset ($_GET['Funcao'])){
		if ($_GET['Funcao']=="Cadastra"){
		$Senha = md5($_POST['Senha']);
	    $cadastra = "INSERT INTO `bdcadastroetec`.`tbcadastrosenha`(`Nome`,`Senha`,`Nivel`) VALUES ('".$_POST['Nome']."','". $Senha ."','".$_POST['Nivel']."');";
	    mysql_query($cadastra);
		
		echo "<script>alert('Os dados foram Cadastrados com sucesso');</script>";
	   }		
	}  
?>


<html>

	<head> 
	
		<title>Senha</Title>
		<link rel="stylesheet" type="text/css" href="../css/style.css"> 
	</head>

		<body > 
			
			<b><hr><div class="t1">Cadastro Senha</div><hr></b> 
			<form name="senha" method="post" action="cadastrosenha.php?Funcao=Cadastra">			
			<fieldset>
				<br>
				<label for="Código:"><b>Nome:</b></label>		
				<input type="text" name="Nome" id="Nome" >
				<br>
				<br>
				<label for="Código:"><b>Senha :</b></label>		
				<input type="password" name="Senha" id="Senha" >
				<br>
				<br>	
				<label for="Sigla"><b>Digite o Nivel :</b></label>
				<input type="text" name ="Nivel" id="Nivel" >
				<br>	
			
				<br>
				</fieldset>
				<br>
				<br>
				<fieldset>
				<label for="Nivel"><p><b>Tipos de Nivel:</b></p></label>
				
				<label for="Nivel1"><p><b>Nivel 1 (Administração)</b></p></label>
				<br>
				<label for="Nivel1"><p><b>Nivel 2 (Professores)</b></p></label>
				<br>
				<label for="Nivel1"><p><b>Nivel 3 (Estágiarios)</b></p></label>
				
				</fieldset>	
				
				<br>
				<input name="Ok" type="submit"  value="Ok">
				<br>
				<center><a href = "Administrativo.php">Voltar A Pagina Principal</a>
		
	 </body> 
	 </form>
</html>