<?php
	include("../inc/conexao.php");
		 if ($_GET['Funcao'] == "altera"){
			$SQLalterar ="UPDATE  `bdcadastroetec`.`tbprofessores` SET `Nome` = '".$_POST['nome']."',`CEP`='".$_POST['cep']."',`Dtnasc`='".$_POST['nascimento']."',`Endereco`='".$_POST['endereco']."',`Bairro`='".$_POST['bairro']."',`Cidade`='".$_POST['cidade']."',`Estado`='".$_POST['estado']."',`Telefone`='".$_POST['telefone']."',`Celular`='".$_POST['celular']."',`Nacionalidade`='".$_POST['nacionalidade']."',`Email`='".$_POST['email']."',`Estcivil`='".$_POST['EstadoCivil']."',`Sexo`='".$_POST['Sexo']."',`Materia`='".$_POST['materia']."' WHERE  `tbprofessores`.`Codigo`='".$_GET['Codigo']. "';";
			mysql_query($SQLalterar);
			echo "<script>alert('Os dados foram alterado com sucesso');</script>";
			
		}
?>



<html>

		<head> 
		
			<title> Alterar Professores </title> 
			<link rel= "stylesheet" type="text/css" href="../css/style.css">
		
		</head>
	<body>
	
		
		<b><hr> <div class="t1">Alteração de Professores </b><hr></div>
	<form Name="consultaprofessores" method="Post" action="alterarprofessores.php?Funcao=pesquisar">
					
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
						
			<form Name="alterar" method="POST" action ="alterarprofessores.php?Funcao=altera&Codigo=<?php echo $Res['Codigo'];?>">
				<fieldset>
		
			<label for="matricula"> Codigo: </label>   
			<div class="t2"><?php Echo $Res['Codigo'];?></div> 	
			<br>
			<br>
			
			<label for="logon">Materia:</label>
			<div class="t2"><input type="text" id="logon" name="materia" value="<?php Echo $Res['Materia'];?>"></div>
			<br />
			<br>
		
			<label for="Name"> Nome: </label>   
			<div class="t2"><input type = "text" name= "nome" ID="Nome" value="<?php Echo $Res['Nome'];?>"></div> 	

		</br>
		<br>
		
			<label for="Name"> Cep: </label>   
			<div class="t2"><input type = "text" name= "cep" ID="Nome" value="<?php Echo $Res['CEP'];?>"></div> 
			<br>
			<br>			

			<label for="nascimento">Data de Nasc.:</label>
			<div class="t2"><input name="nascimento" type="date" value="<?php Echo $Res['Dtnasc'];?>"></div>
			<br />	
					
	
		   <br>
			<label for="Name"> Endereco: </label>   
			<div class="t2"><input type = "text" name= "endereco" ID="Nome" value="<?php Echo $Res['Endereco'];?>"></div> 	 
			
		    <br>			
		    <br>
			
			<label for="Name"> Bairro: </label>   
			<div class="t2"><input type = "text" name= "bairro" ID="Nome" value="<?php Echo $Res['Bairro'];?>"></div> 
			<br>
			<br>
			<label for="logon">Cidade:</label>
			<div class="t2"><input type="text" id="logon" name="cidade" value="<?php Echo $Res['Cidade'];?>"></div>
			<br />	
		
		
			<br>				
			<label for="Name"> Estado: </label>   
			
			
			<select name = "estado" value="<?php Echo $Res['Estado'];?>  " >
			
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

			<label for="logon">Telefone:</label>
			<div class="t2"><input type="text" id="logon" name="telefone" value="<?php Echo $Res['Telefone'];?>"></div> 	 
			<br>			
			<br>	
			
				
			<label for="Name"> Celular: </label>   
			<div class="t2"><input type = "text" name= "celular" ID="Nome" value="<?php Echo $Res['Celular'];?>"> </div> 	
			<br />	
					     			
			<br>
				<label for="Name"> Nacionalidade: </label>  
					<input type = "text" name= "nacionalidade" ID="Nome" value="<?php Echo $Res['Nacionalidade'];?>">
			</br>
			<br>

			<label for="logon">E-mail:</label>
			<div class="t2"><input type="text" id="email" name="email" value="<?php Echo $Res['Email'];?>"></div>
			
			<br />			

			<br>		
			<label for="logon">Estado civil:</label>
			<select name="EstadoCivil" value="<?php Echo $Res['Estcivil'];?>">
					
					<option value="Casado">Casado</option>
					<option value="Solteiro">Solteiro</option>
					<option value="Viúvo">Viúvo</option>
					<option value="Separado">Separado</option>
										
				</Select>	



				
			</br>		
			
			<br>
				<br>				
				<label for="Name"> Sexo: </label>   
				
				<select name="Sexo" id="sexo" VALUE="<?php Echo $Res['Sexo'];?>">
				<option value="Masculino">Masculino</option>
				<option value="Feminino">Feminino</option>
										
				</select>
				<br>
				<br>
				
			</fieldset>
			
			<input type="submit" Name="OK" VALUE="OK">	
			<br>
			<br>		
		
		 <?php }} ?>
		 <center><a href = "Administrativo.php">Voltar A Pagina Principal</a>
	</body>
			</form>
		</html>