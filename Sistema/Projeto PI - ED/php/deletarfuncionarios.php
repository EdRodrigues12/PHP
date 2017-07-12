<?php
	include("../inc/conexao.php");
		 if ($_GET['Funcao'] == "deleta"){
			$SQLdeletar ="DELETE FROM `bdcadastroetec`.`tbfuncionario` WHERE `codfuncionario` = '".$_GET['codfuncionario']."';";			
				mysql_query($SQLdeletar);
					echo "<script>alert('Os dados foram apagados com sucesso');</script>";
			
		}
?>

<html>

		<head> 
		
			<title> Deletar Funcionarios </title> 
			<link rel= "stylesheet" type="text/css" href="../css/style.css">
		
		</head>
	<body>
	
		
		<b><hr> <div class="t1">DeletarFuncionarios </b><hr></div>
	<form Name="consultafuncionario" method="Post" action="deletarfuncionarios.php?Funcao=pesquisar">
					
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
	<form Name="deletar" method="POST" action ="deletarfuncionarios.php?Funcao=deleta&codfuncionario=<?php echo $Res['codfuncionario'];?>">
	
				
			<fieldset>
			
			 <label for="logon">Código:</label>
			<div class="t2"><?php Echo $Res['codfuncionario'];?></div>
			<br />
				
			
			<label for="logon">Nome:</label>
			<div class="t2"><?php Echo $Res['Nome'];?></div>
			<br />
			
			
			<label for="logon">CEP:</label>
			<div class="t2"><?php Echo $Res['CEP'];?></div>
			<br />
			
			
				
			
			<label for="logon">Endereço:</label>
			<div class="t2"><?php Echo $Res['Endereco'];?></div>
			<br />
			
			
			
			<label for="logon">Bairro:</label>
			<div class="t2"><?php Echo $Res['Bairro'];?></div>
			<br />
			
			<label for="logon">Numero:</label>
			<div class="t2"><?php Echo $Res['Numero'];?></div>
			<br />
		
			
			<label for="logon">Cidade:</label>
			<div class="t2"><?php Echo $Res['Cidade'];?></div>
			<br />
			
			
			<label for="Name"> Estado: </label>   
			
			<?php Echo $Res['Estado'];?>
									
		
		<br />
			<br />
		
			
			<label for="logon">Telefone:</label>
			<div class="t2"><?php Echo $Res['Telefone'];?></div>
			<br />
			
			
			<label for="logon">Celular:</label>
			<div class="t2"><?php Echo $Res['Celular'];?></div>
			<br />
			<br>			
			<label for="Name"> CPF: </label>   
			<div class="t2"><?php Echo $Res['CPF'];?> </div> 	
			<br />	
			
			<label for="Name"> RG: </label>  	
			<div class="t2"><?php Echo $Res['RG'];?> </div> 	
			
			<br />	
			
			<label for="Name"> UF: </label>  	
			<div class="t2"><?php Echo $Res['UF'];?></div> 				
			</br>
			
			<br />	
			
			<label for="Name"> Orgão Expeditor: </label>  	
			<div class="t2"><?php Echo $Res['Orgaoexpeditor'];?></div> 				
			</br>
								
								
			<label for="logon">E-mail:</label>
			<div class="t2"><?php Echo $Res['Email'];?></div>
			
			<br />
								
				 
			<label for="logon">Estado civil:</label>
			<?php Echo $Res['estcivil'];?>">
					
					
			
			<br />
			<br />
			
			<br>
		<fieldset>
			<label for="Name"> Local de Nascimento </label>			
		</br>
		
		<br>				
			<label for="Name"> Estado: </label>   
			
			<?php Echo $Res['Estadonasc'];?>
									
		
		<br />
		
		<br>		
			<label for="Name"> Cidade: </label>  	
			<?php Echo $Res['Cidnasc'];?> 			
		</br>	
		
				
		<br>		
			<label for="Name"> Data: </label>  	
			<?php Echo $Res['Dianasc'];?> 
			<br>
			<br>
			<label for="Name"> Idade: </label>  	
			<?php Echo $Res['Idade'];?>			
		</br>
		
		<br>
				
			<label for="Name"> Nacionalidade: </label>  
			<?php Echo $Res['Nacionalidade'];?>			
							
		</br>	

		<br>		
			<label for="Name"> Raca: </label>  	
				
				<?php Echo $Res['Raça'];?>
						
		</br>		
		
		<br>
			<br>				
			<label for="Name"> Sexo: </label>   
			
			<?php Echo $Res['Sexo'];?>
									
		</fieldset>
			
			<br />
			<br />
			
			<label for="logon">Função:</label>
			<div class="t2"><?php Echo $Res['Funcao'];?></div>
			</br>
			
			<label for="Name"> Turno: </label>   
			
			<?php Echo $Res['Turno'];?>
												
		<br>
		<br>
		 
		 </fieldset>
			
			<input name="Deletar" type="submit"  value="Deletar">
				<br />
				
               <?php }} ?>				
		
		<center><a href = "Administrativo.php">Voltar A Pagina Principal</a>
	</body>
	</form>
</html>