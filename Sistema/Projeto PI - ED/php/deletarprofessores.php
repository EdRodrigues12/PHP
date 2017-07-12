<?php
	include("../inc/conexao.php");
		 if ($_GET['Funcao'] == "deleta"){
			$SQLdeletar ="DELETE FROM `bdcadastroetec`.`tbprofessores` WHERE `Codigo` = '".$_GET['Codigo']."';";			
				mysql_query($SQLdeletar);
					echo "<script>alert('Os dados foram apagados com sucesso');</script>";
			
		}
?>

<html>

		<head> 
		
			<title> Deletar Professores </title> 
			<link rel= "stylesheet" type="text/css" href="../css/style.css">
		
		</head>
	<body>
	
		
		<b><hr> <div class="t1">Deletar Professores </b><hr></div>
	<form Name="consultaprofessores" method="Post" action="deletarprofessores.php?Funcao=pesquisar">
					
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
						$SQLpesquisar="SELECT * FROM `tbprofessores` WHERE `Nome` LIKE '%".$_POST['Nome']."%';";
							$Total=mysql_query($SQLpesquisar);
								while ($Res=mysql_fetch_array($Total)){
									?>
						
			<form Name="deletar" method="POST" action ="deletarprofessores.php?Funcao=deleta&Codigo=<?php echo $Res['Codigo'];?>">
				<fieldset>
		
			<label for="matricula"> Codigo: </label>   
			<div class="t2"><?php Echo $Res['Codigo'];?></div> 	
			<br>
			<br>
			
			<label for="logon">Materia:</label>
			<div class="t2"><?php Echo $Res['Materia'];?></div>
			<br />
			<br>
		
			<label for="Name"> Nome: </label>   
			<div class="t2"><?php Echo $Res['Nome'];?></div> 	

		</br>
		<br>
		
			<label for="Name"> Cep: </label>   
			<div class="t2"><?php Echo $Res['CEP'];?></div> 
			<br>
			<br>			

			<label for="nascimento">Data de Nasc.:</label>
			<div class="t2"><?php Echo $Res['Dtnasc'];?></div>
			<br />	
					
	
		   <br>
			<label for="Name"> Endereco: </label>   
			<div class="t2"><?php Echo $Res['Endereco'];?></div>  
			
		    <br>			
		    <br>
			
			<label for="Name"> Bairro: </label>   
			<div class="t2"><?php Echo $Res['Bairro'];?></div> 
			<br>
			<br>
			<label for="logon">Cidade:</label>
			<div class="t2"><?php Echo $Res['Cidade'];?></div>
			<br />	
		
		
			<br>				
			<label for="Name"> Estado: </label>   
			
			
			<?php Echo $Res['Estado'];?>  
			
					
		<br />
		<br />

			<label for="logon">Telefone:</label>
			<div class="t2"><?php Echo $Res['Telefone'];?></div> 	 
			<br>			
			<br>	
			
				
			<label for="Name"> Celular: </label>   
			<div class="t2"><?php Echo $Res['Celular'];?> </div> 	
			<br />	
					     			
			<br>
				<label for="Name"> Nacionalidade: </label>  
					<?php Echo $Res['Nacionalidade'];?>
			</br>
			<br>

			<label for="logon">E-mail:</label>
			<div class="t2"><?php Echo $Res['Email'];?></div>
			
			<br />			

			<br>		
			<label for="logon">Estado civil:</label>
			<?php Echo $Res['Estcivil'];?>
					
					<o



				
			</br>		
			
			<br>
				<br>				
				<label for="Name"> Sexo: </label>   
				
				<?php Echo $Res['Sexo'];?>">
				
										
				
				<br>
				<br>
				
			</fieldset>
			
			<input type="submit" Name="Deletar" VALUE="deletar">	
			<br>
			<br>		
		
		 <?php }} ?>
		 <center><a href = "Administrativo.php">Voltar A Pagina Principal</a>
	</body>
			</form>
		</html>