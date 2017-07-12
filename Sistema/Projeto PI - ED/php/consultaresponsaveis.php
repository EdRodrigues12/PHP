<html>

	<head>
		<title>Consulta Responsáveis</title>
		<link rel= "stylesheet" type="text/css" href="../css/style.css">
	<head>

	<body>
	
		<form name="responsavel" method="POST" action="consultaresponsaveis.php?Funcao=pesquisar">
		<b><hr><div class="t1">Consulta Responsáveis</div><hr></b> 
		
		<table border="1">
								<label for="Name"> Nome: </label>   
				<div class="t2"><input type="text" name="Nome" id="Nome" ></div> 	

								<br>
								
								<input type="submit" Name="OK" VALUE="OK">
										
							</table>
			</form>
			
				<?php
				include("../inc/conexao.php");
					if($_GET['Funcao']=="pesquisar"){
						$SQLpesquisar="SELECT * FROM `tbresponsaveis` WHERE `Nome` LIKE '%".$_POST['Nome']."%';";
							$Total=mysql_query($SQLpesquisar);
								while ($Res=mysql_fetch_array($Total)){
									?>
									
		<fieldset>
				
				<label for="Name"> Nome: </label> 
				<?php Echo $Res['Nome'];?>
				<br>
				<br>
				<label for="Name"> Cep: </label> 
				<?php Echo $Res['CEP'];?>
				<br>
				<br>
				<label for="Name"> Endereco: </label> 
				<?php Echo $Res['Endereco'];?>
				<br>
				<br>
				<label for="Name"> Numero: </label> 
				<?php Echo $Res['Numero'];?>
				<br>
				<br>
				<label for="Name"> Bairro: </label>   
				<?php Echo $Res['Bairro'];?>
				<br>
				<br>
				<label for="Name"> Estado: </label>
				<?php Echo $Res['Estado'];?>
				<br>
				<br>
				<label for="Name"> Cidade: </label> 
				<?php Echo $Res['Cidade'];?>
				<br>
				<br>
				<label for="Name"> Fone Res: </label> 
				<?php Echo $Res['Telefonecasa'];?>
				<br>
				<br>
				<label for="Name"> Fone Com.: </label> 
				<?php Echo $Res['Telefonetrab'];?>
				<br>
				<br>
				<label for="Name"> Celular: </label>  
				<?php Echo $Res['Celular'];?>
				<br>
				<br>
				<label for="Name"> CPF: </label>  
				<?php Echo $Res['CPF'];?>
				<br>
				<br>
				<label for="Name"> RG: </label>  
				<?php Echo $Res['RG'];?>
				<br>
				<br>
				<label for="Name"> E-mail: </label> 
				<?php Echo $Res['Email'];?>
				<br>
				<br>
				<label for="Name"> Profissão: </label>   
				<?php Echo $Res['Profissao'];?>
				<br>
				<br>
				<fieldset>
				<b><label for="Name">  Nascimento </label></b>			
				<br>
				<br>
				<label for="Name"> Data Nasc.: </label> 
				<?php Echo $Res['Datanasc'];?>
				<br>
				<br>
				<label for="Name"> Idade: </label>  
				<?php Echo $Res['Idade'];?>
				<br>
				<br>
				<label for="Name"> Nacionalidade: </label>  
				<?php Echo $Res['Nacionalidade'];?>
				<br>
				<br>
				<label for="Name"> Raca: </label> 
				<?php Echo $Res['Raça'];?>
				<br>
				<br>
				<label for="Name"> Cor: </label>   
				
				<?php Echo $Res['Cor'];?>
				<br>
				<br>
				
				<label for="Name"> Sexo: </label>     
				<?php Echo $Res['Sexo'];?>
				</fieldset>
				
				
				
		
	</fieldset>
	<br>
	<?php }} ?>
	<br>
	<center><a href = "Administrativo.php">Voltar A Pagina Principal</a>
	</body>
	 
</html>