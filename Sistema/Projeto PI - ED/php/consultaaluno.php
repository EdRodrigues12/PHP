
<html>

		<head> 
		
			<title> Consulta de Alunos </title> 
			<link rel= "stylesheet" type="text/css" href="../css/style.css">
		
		</head>
	<body>
	
		
		<b><hr> <div class="t1">Consulta de Alunos </b><hr></div>
	<form Name="consultaaluno" method="Post" action="Consultaaluno.php?Funcao=pesquisar">
					
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
						$SQLpesquisar="SELECT * FROM `tbalunos` WHERE `Nome` LIKE '%".$_POST['Nome']."%';";
							$Total=mysql_query($SQLpesquisar);
								while ($Res=mysql_fetch_array($Total)){
									?>
						
	
				<fieldset>
		
			<label for="matricula"> Matricula: </label>   
			<div class="t2"><?php Echo $Res['Matricula'];?></div> 	

		
			<label for="Name"> Nome: </label>   
			<div class="t2"><?php Echo $Res['Nome'];?></div> 	

		</br>
		
			<label for="Name"> Cep: </label>   
			<div class="t2"><?php Echo $Res['CEP'];?></div> 			
					
	
		<br>
			<label for="Name"> Endereco: </label>   
			<div class="t2"><?php Echo $Res['Endereco'];?></div> 	 
			
		<br>			
		
			<label for="Name"> Numero: </label>   
			<div class="t2"><?php Echo $Res['Numero'];?></div> 	 
			
		<br>
			<label for="Name"> Bairro: </label>   
			<div class="t2"><?php Echo $Res['Bairro'];?></div> 	 
		
		
		<br>				
			<label for="Name"> Estado: </label>   
			
			<?php Echo $Res['Estado'];?>
		
		<br />
		<br />

			<label for="Name"> Cidade: </label>   
			<div class="t2"><?php Echo $Res['Cidade'];?></div> 	 
			<br>			
				
			<label for="Name"> Fone Res: </label>   
			<div class="t2"><?php Echo $Res['Telefone'];?> </div> 	
				
				<br>
				
			<label for="Name"> Celular: </label>   
			<div class="t2"><?php Echo $Res['Celular'];?> </div> 	
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
			<div class="t2"><?php Echo $Res['OrgaoExp'];?></div> 				
			</br>
		
		<br>		
			<label for="Name"> E-mail: </label>  	
			<div class="t2"><?php Echo $Res['Email'];?></div> 				
		</br>
		
				
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
	
					
		<br>		
			<label for="Name"> Data: </label>  	
			<?php Echo $Res['dianasc'];?> 
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
			<?php Echo $Res['Raca'];?>			
		</br>		
		
		<br>
			<br>				
			<label for="Name"> Sexo: </label>   
			
			<?php Echo $Res['Sexo'];?>
		</fieldset>
		<br />
		<br >	
	 

  <fieldset>
  
			<label for="Curso"> Curso: </label>  	
			<div class="t2"><?php Echo $Res['Curso'];?></div> 				
		<br >
		
		<br>		
			<label for="Turma"> Turma: </label>  	
			<div class="t2"><?php Echo $Res['Turma'];?></div> 				
		</br>
			
			<label for="Name"> Turno: </label>   
			
			<?php Echo $Res['Turno'];?>		
		<br>
		<br>	
		</fieldset>		
		
				
	<center><a href = "Administrativo.php">Voltar A Pagina Principal</a>
	 <?php }} ?>
	</body>
		</html>