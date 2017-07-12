<html>
	<head>
		<title> Cadastro de Funcionários </title>
		<link rel="stylesheet" href="..\css\style.css">
		
	</head>
	
	<body>
	
		 
		
			<b><hr> <div class="t1">Cadastro de Funcionários </b><hr></div>
				
			
			<form name="funcionario" method="POST" action="Consultafuncionarios.php?Funcao=pesquisar">
			
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
						$SQLpesquisar="SELECT * FROM `tbfuncionario` WHERE `Nome` LIKE '%".$_POST['Nome']."%';";
							$Total=mysql_query($SQLpesquisar);
								while ($Res=mysql_fetch_array($Total)){
									?>
			
			<fieldset>
			 <label for="logon">Código:</label>
			<?php Echo $Res['codfuncionario'];?>
			<br />
			<br />
				
			
			<label for="logon">Nome:</label>
			<?php Echo $Res['Nome'];?>
			<br />
			<br />
			
			
			<label for="logon">CEP:</label>
			<?php Echo $Res['CEP'];?>
			<br />
			<br />
			
			
				
			
			<label for="logon">Endereço:</label>
			<?php Echo $Res['Endereco'];?>
			<br />
			<br />
			
			
			
			<label for="logon">Bairro:</label>
			<?php Echo $Res['Endereco'];?>
			<br />
			<br />
			
			<label for="logon">Numero:</label>
			<?php Echo $Res['Numero'];?>
			<br />
			<br />
		
			
			<label for="logon">Cidade:</label>
			<?php Echo $Res['Cidade'];?>
			<br />
			<br />
			
			
			<label for="Name"> Estado: </label>   
			
			<?php Echo $Res['Estado'];?>
		
		<br />
			<br />
		
			
			<label for="logon">Telefone:</label>
			<?php Echo $Res['Telefone'];?>
			<br />
			<br />
			
			
			<label for="logon">Celular:</label>
			<?php Echo $Res['Celular'];?>
			<br />
			<br />			
			<label for="Name"> CPF: </label>   
			<?php Echo $Res['CPF'];?> 	
			<br />
			<br />	
			
			<label for="Name"> RG: </label>  	
			<?php Echo $Res['RG'];?> 	
			
			<br />
			<br />	
			
			<label for="Name"> UF: </label>  	
			<?php Echo $Res['UF'];?> 				
			<br />
			<br />	
			
			<label for="Name"> Orgão Expeditor: </label>  	
			<?php Echo $Res['Orgaoexpeditor'];?> 				
			<br />
			<br />
								
								
			<label for="logon">Email:</label>
			<?php Echo $Res['Email'];?>
			
			<br />
			<br />
								
				 
			<label for="logon">Estado civil:</label>
			<?php Echo $Res['estcivil'];?>
			
			<br />
			<br />
			
		<fieldset>
			<label for="Name"> Local de Nascimento </label>			
		</br>
		
		<br>				
			<label for="Name"> Estado: </label>   
			
			<?php Echo $Res['Estadonasc'];?>
		
		<br />
			<br />
			
			<label for="Name"> Cidade: </label>  	
			<?php Echo $Res['Cidnasc'];?>			
		<br />
			<br />
			
			<label for="Name"> Data: </label>  	
			<?php Echo $Res['Dianasc'];?>			
		<br />
			<br />
				
			<label for="Name"> Nacionalidade: </label>  
			<?php Echo $Res['Nacionalidade'];?>
			
		<br />
			<br />	

				
			<label for="Name"> Raca: </label>  	
			<?php Echo $Res['Raça'];?>	
			
		<br />
			<br />		
		
		
			<br>				
			<label for="Name"> Sexo: </label>   
			
			<?php Echo $Res['Sexo'];?>
			
		</fieldset>
			
			<br />
			<br />
			
			<label for="logon">Função:</label>
			<?php Echo $Res['Funcao'];?>
			</br>
			</br>
			
			<label for="Name"> Turno: </label>   
			
			<?php Echo $Res['Turno'];?>			
		<br>
		<br>
		 
		 </fieldset>
			
			<?php }} ?>
				<br />
               				
		
		<center><a href = "Administrativo.php">Voltar A Pagina Principal</a>
	</body>
	
</html>