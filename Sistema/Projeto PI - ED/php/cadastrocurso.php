<?php
	include("../inc/conexao.php");
	if(isset ($_GET['Funcao'])){
		if ($_GET['Funcao']=="Cadastra"){
	    $cadastra = "INSERT INTO `bdcadastroetec`.`tbcurso`(`codcurso`,`Nome`,`Descricao`,`Periodo`,`Escola`,`Cidade`,`Ano`) VALUES ('".$_POST['cod']."','".$_POST['curso']."','".$_POST['desc']."','".$_POST['turno']."','".$_POST['escola']."','".$_POST['cidade']."','".$_POST['ano']."');";
	    mysql_query($cadastra);
		echo "<script>alert('Os dados foram Cadastrados com sucesso');</script>";
	   }		
	}  
?>



<html>

	<head>
	<title>Cadastro de Curso</title>
		<link rel= "stylesheet" type="text/css" href="../css/style.css">
		
	</head>	
	
	<body>
	<form name="curso" method="POST" action="cadastrocurso.php?Funcao=Cadastra">
		<b><hr> <div class="t1">Cadastro de Curso </b><hr></div>
	<fieldset>
	
		<br>	
		
			<label for="Nome">Código:</label>				
			<input type="text" name="cod" id="cod" > 	
			
		</br>
		
		
		<br>	
		
			<label for="Nome">Curso :</label>				
			<input type="text" name="curso" id="curso" > 	
			
		<br>
		<br>
		
		
			<label for="Nome">Descrição:</label>				
			<input type="text" name="desc" id="desc" > 	
			
		<br>
		
		<br>	
		
			<label for="Nome">Escola:</label>				
			<input type="text" name="escola" id="escola" > 	
			
		</br>
		
		<br>	
		
			<label for="Nome">Cidade:</label>				
			<input type="text" name="cidade" id="cidade" > 	
			
		<br>

		<br>	
		
			<label for="Name"> Turno: </label>   
			
			<select name="turno" id="turno">
									<option value="Manha">Manhã</option>
									<option value="Tarde">Tarde</option>
									<option value="Noite">Noite</option>
									
									</select>	
			
		<br>

		<br>	
		
			<label for="Nome">Ano:</label>				
			<input type="text" name="ano" id="ano" > 	
			
		<br>				
		
		
			</fieldset>
			
			<input name="Ok" type="submit"  value="Ok">			
							
		<br>
		<center><a href = "Administrativo.php">Voltar A Pagina Principal</a>	
	</body>
	</form>
</html>