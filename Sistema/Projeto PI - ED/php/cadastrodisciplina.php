<?php
	include("../inc/conexao.php");
	if(isset ($_GET['Funcao'])){
		if ($_GET['Funcao']=="Cadastra"){
	    $cadastra = "INSERT INTO `bdcadastroetec`.`tbdisciplinas`(`coddisciplina`,`Nome`,`Descricao`,`Sigla`) VALUES ('".$_POST['Código']."','".$_POST['Nome']."','".$_POST['Descrição']."','".$_POST['Sigla']."');";
	    mysql_query($cadastra);
		
		echo "<script>alert('Os dados foram Cadastrados com sucesso');</script>";
	   }		
	}  
?>


<html>

	<head> 
		<link rel="stylesheet" type="text/css" href="../css/style.css"> 
	</head>

		<body > 
			
			<b><hr><div class="t1">Cadastro de Disciplinas</div><hr></b> 
			<form name="disciplina" method="post" action="cadastrodisciplina.php?Funcao=Cadastra">			
			<fieldset>
				<br>
				<label for="Código:"><b>Codigo:</b></label>		
				<input type="text" name="Código" id="Código" >
				<br>
				<br>
				<label for="Código:"><b>Nome :</b></label>		
				<input type="text" name="Nome" id="Nome" >
				<br>
				<br>	
				<label for="Sigla"><b>Sigla :</b></label>
				<input type="text" name ="Sigla" id="Sigla" >
				<br>	
			
				<br>
				<label for="Descrição"><p><b>Descricao:</b></p></label>
				<input type="text" name ="Descrição" id="Descrição" >
				</fieldset>	
				
				<br>
				<input name="Ok" type="submit"  value="Ok">
				<br>
				<center><a href = "Administrativo.php">Voltar A Pagina Principal</a>
		
	 </body> 
	 </form>
</html>