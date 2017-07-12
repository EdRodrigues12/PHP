<?php
	include("../inc/conexao.php");
	if(isset ($_GET['Funcao'])){
		if ($_GET['Funcao']=="Cadastra"){
	    $cadastra = "INSERT INTO `bdcadastroetec`.`tbcadastroturma`(`codturma`,`Nome`,`Curso`,`Ano`,`Turno`) VALUES ('".$_POST['cod']."','".$_POST['nome']."','".$_POST['curso']."','".$_POST['ano']."','".$_POST['turno']."');";
	    mysql_query($cadastra);
		
		echo "<script>alert('Os dados foram Cadastrados com sucesso');</script>";
	   }		
	}  
?>


<html>

	<head>
	
		<title>	Registro Turma </title>
		
	</head>	
		
	<body>
	<link rel="stylesheet" href="..\css\style.css">
		<b><hr> <div class="t1">Registro de Turma </b><hr></div>
	<fieldset>
	<form name="turma"  method="post" action="registroturma.php?Funcao=Cadastra">
			<br>	
			
				<label for="Nome">Código:</label>				
				<input type="text" name="cod" id="cod" > 
				
			</br>
			
			
			<br>	
			
				<label for="Nome">Nome:</label>				
				<input type="text" name="nome" id="nome" > 
				
			</br>
			
			<br>	
			
				<label for="Nome">Curso:</label>				
				<input type="text" name="curso" id="curso" > 
				
			</br>
			
			
			
			<br>	
			
				<label for="Nome">Ano:</label>				
				<input type="text" name="ano" id="ano" size="10"> 
				
			</br>			
				
			<br>
			<fieldset>
				<label for="Nome">Turno</label>	
				
			</br>
			
			<br>
			
				<label for="Name"> Turno: </label>   
			
			<select name="turno" id="Turno">
									<option value="Manha">Manhã</option>
									<option value="Tarde">Tarde</option>
									<option value="Noite">Noite</option>
									
									</select>
				
			</br>
			
			<br>
				<input name="Ok" type="submit"  value="Ok">				
			</br>			
		<center><a href = "Administrativo.php">Voltar A Pagina Principal</a>
	</body>
	</form>
</html>