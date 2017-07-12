<?php
	include("../inc/conexao.php");
		 if ($_GET['Funcao'] == "altera"){
			$SQLalterar ="UPDATE `bdcadastroetec`.`tbalunos` SET `Nome` = '".$_POST['Nome']."',`CEP`='".$_POST['CEP']."',`Endereco`='".$_POST['Endereco']."',`Numero`='".$_POST['Numero']."',`Bairro`='".$_POST['Bairro']."',`Estado`='".$_POST['Estado']."',`Cidade`='".$_POST['Cidade']."',`Telefone`='".$_POST['Telefone']."',`Celular`='".$_POST['Celular']."',`CPF`='".$_POST['CPF']."',`RG`='".$_POST['RG']."',`UF`='".$_POST['UF']."',`OrgaoExp`='".$_POST['Orgaoexp']."',`Email`='".$_POST['Email']."',`Estadonasc`='".$_POST['Estadonasc']."',`Cidnasc`='".$_POST['Cidadenasc']."',`dianasc`='".$_POST['Data']."',`Idade`='".$_POST['Idade']."',`Nacionalidade`='".$_POST['Nacionalidade']."',`Raca`='".$_POST['Raca']."',`Sexo`='".$_POST['Sexo']."',`Turma`='".$_POST['Turma']."',`Turno`='".$_POST['Turno']."',`Curso`='".$_POST['Curso']."' WHERE  `tbalunos`.`Matricula`='".$_GET['Matricula']. "';";
			mysql_query($SQLalterar);
			echo "<script>alert('Os dados foram alterado com sucesso');</script>";
			
		}
?>



<html>

		<head> 
		
			<title> Alterar Alunos </title> 
			<link rel= "stylesheet" type="text/css" href="../css/style.css">
		
		</head>
	<body>
	
		
		<b><hr> <div class="t1">Alteração de Alunos </b><hr></div>
	<form Name="consultaaluno" method="Post" action="alteraraluno.php?Funcao=pesquisar">
					
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
						
			<form Name="alterar" method="POST" action ="alteraraluno.php?Funcao=altera&Matricula=<?php echo $Res['Matricula'];?>">
				<fieldset>
		
			<label for="matricula"> Matricula: </label>   
			<div class="t2"><?php Echo $Res['Matricula'];?></div> 	

		
			<label for="Name"> Nome: </label>   
			<div class="t2"><input type = "text" name= "Nome" ID="Nome" value="<?php Echo $Res['Nome'];?>"></div> 	

		</br>
		
			<label for="Name"> Cep: </label>   
			<div class="t2"><input type = "text" name= "CEP" ID="Nome" value="<?php Echo $Res['CEP'];?>"></div> 			
					
	
		<br>
			<label for="Name"> Endereco: </label>   
			<div class="t2"><input type = "text" name= "Endereco" ID="Nome" value="<?php Echo $Res['Endereco'];?>"></div> 	 
			
		<br>			
		
			<label for="Name"> Numero: </label>   
			<div class="t2"><input type = "text" name= "Numero" ID="Nome" value="<?php Echo $Res['Numero'];?>"></div> 	 
			
		<br>
			<label for="Name"> Bairro: </label>   
			<div class="t2"><input type = "text" name= "Bairro" ID="Nome" value="<?php Echo $Res['Bairro'];?>"></div> 	 
		
		
		<br>				
			<label for="Name"> Estado: </label>   
			
			
			<select name = "Estado" ID = " Estado" value="<?php echo $Res['Estado']; ?>" >
					<option value = "AC" > AC </option>
					<option value = "AL" > AL </option>
					<option value = "AM" > AM </option>
					<option value = "BA" > BA </option>
					<option value = "CE" > CE </option>
					<option value = "DF" > DF </option>
					<option value = "ES" > ES </option>
					<option value = "GO" > GO </option>
					<option value = "MA" > MA </option>
					<option value = "MG" > MG </option>
					<option value = "MT" > MT </option>
					<option value = "MS" > MS </option>
					<option value = "PA" > PA </option>
					<option value = "PB" > PB </option>
					<option value = "PE" > PE </option>
					<option value = "PI" > PI </option>
					<option value = "PR" > PR </option>
					<option value = "RJ" > RJ </option>
					<option value = "RN" > RN </option>
					<option value = "RO" > RO </option>
					<option value = "RR" > RR </option>
					<option value = "RS" > RS </option>
					<option value = "SC" > SC </option>
					<option value = "SE" > SE </option>
					<option value = "SP" > SP </option>
					<option value = "TO" > TO </option>
			</select>
		<br />
		<br />

			<label for="Name"> Cidade: </label>   
			<div class="t2"><input type = "text" name= "Cidade" ID="Nome" value="<?php Echo $Res['Cidade'];?>"></div> 	 
			<br>			
				
			<label for="Name"> Fone Res: </label>   
			<div class="t2"><input type = "text" name= "Telefone" ID="Nome" value="<?php Echo $Res['Telefone'];?>"> </div> 	
				
				<br>
				
			<label for="Name"> Celular: </label>   
			<div class="t2"><input type = "text" name= "Celular" ID="Nome" value="<?php Echo $Res['Celular'];?>"> </div> 	
			<br />	
			
			
		
		    <br>			
			<label for="Name"> CPF: </label>   
			<div class="t2"><input type = "text" name= "CPF" ID="Nome" value="<?php Echo $Res['CPF'];?>"> </div> 	
			<br />	
			
			<label for="Name"> RG: </label>  	
			<div class="t2"><input type = "text" name= "RG" ID="Nome" value="<?php Echo $Res['RG'];?>"> </div> 	
			
			<br />	
			
			<label for="Name"> UF: </label>  	
			<div class="t2"><input type = "text" name= "UF" ID="Nome" value="<?php Echo $Res['UF'];?>"></div> 				
			</br>
			
			<br />	
			
			<label for="Name"> Orgão Expeditor: </label>  	
			<div class="t2"><input type = "text" name= "Orgaoexp" ID="Nome" value="<?php Echo $Res['OrgaoExp'];?>"></div> 				
			</br>
		
		<br>		
			<label for="Name"> E-mail: </label>  	
			<div class="t2"><input type = "text" name= "Email" ID="Nome" value="<?php Echo $Res['Email'];?>"></div> 				
		</br>
		
				
		<br>
		<fieldset>
			<label for="Name"> Local de Nascimento </label>			
		</br>
		
		<br>				
			<label for="Name"> Estado: </label>   
			
			
			<select name = "Estadonasc" ID = " Estado" value="<?php echo $Res['Estadonasc']; ?>" >
					<option value = "AC" > AC </option>
					<option value = "AL" > AL </option>
					<option value = "AM" > AM </option>
					<option value = "BA" > BA </option>
					<option value = "CE" > CE </option>
					<option value = "DF" > DF </option>
					<option value = "ES" > ES </option>
					<option value = "GO" > GO </option>
					<option value = "MA" > MA </option>
					<option value = "MG" > MG </option>
					<option value = "MT" > MT </option>
					<option value = "MS" > MS </option>
					<option value = "PA" > PA </option>
					<option value = "PB" > PB </option>
					<option value = "PE" > PE </option>
					<option value = "PI" > PI </option>
					<option value = "PR" > PR </option>
					<option value = "RJ" > RJ </option>
					<option value = "RN" > RN </option>
					<option value = "RO" > RO </option>
					<option value = "RR" > RR </option>
					<option value = "RS" > RS </option>
					<option value = "SC" > SC </option>
					<option value = "SE" > SE </option>
					<option value = "SP" > SP </option>
					<option value = "TO" > TO </option>
				</select>
		<br />
		
		<br>		
			<label for="Name"> Cidade: </label>  	
			<input type = "text" name= "Cidadenasc" ID="Nome" value="<?php Echo $Res['Cidnasc'];?>"	>		
	
		<br>			
		<br>		
			<label for="Name"> Data: </label>  	
			<input type = "date" name= "Data" ID="data" value="<?php Echo $Res['dianasc'];?>">
			<br>
			<br>
			<label for="Name"> Idade: </label>  	
			<input type = "text" name= "Idade" id="idade" value="<?php Echo $Res['Idade'];?>	">		
		</br>
		
		<br>
			<label for="Name"> Nacionalidade: </label>  
				<input type = "text" name= "Nacionalidade" ID="Nome" value="<?php Echo $Res['Nacionalidade'];?>">
		</br>	

		<br>		
			<label for="Name"> Raca: </label>  	
				<select name="Raca" id="raca" VALUE="<?php Echo $Res['Raca'];?>">
				<option value="Branco">Branco</option>
				<option value="Negro">Negro</option>
				<option value="Indigena">indígena</option>
				<option value="Asiatico">Asiático</option>
				</select>	
		</br>		
		
		<br>
			<br>				
			<label for="Name"> Sexo: </label>   
			
			<select name="Sexo" id="sexo" VALUE="<?php Echo $Res['Sexo'];?>">
			<option value="Masculino">Masculino</option>
			<option value="Feminino">Feminino</option>
									
			</select>
			
		</fieldset>
		<br />
		<br >	
	 

  <fieldset>
  
			<label for="Curso"> Curso: </label>  	
			<input type = "text" name= "Curso" ID="Nome" value="<?php Echo $Res['Curso'];?>">				
		<br >
		
		<br>		
			<label for="Turma"> Turma: </label>  	
			<input type = "text" name= "Turma" ID="Nome" value="<?php Echo $Res['Turma'];?>">				
		</br>
		<br>	
			<label for="Name"> Turno: </label>   
			
			<input type = "text" name= "Turno" ID="Nome" value="<?php Echo $Res['Turno'];?>">		
		<br>
		<br>	
		</fieldset>		
		<br>
		<br>
		<input type="submit" Name="OK" VALUE="OK">	
		<br>
		<br>		
	
	 <?php }} ?>
	 <center><a href = "Administrativo.php">Voltar A Pagina Principal</a>
	</body>
			</form>
		</html>