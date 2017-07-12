<?php
	include("../inc/conexao.php");
	if(isset ($_GET['Funcao'])){
		if ($_GET['Funcao']=="altera"){
	    $cadastra = "UPDATE `bdcadastroetec`.`tbfuncionario` SET `Nome`='".$_POST['Nome']."',`CEP`='".$_POST['Cep']."',`Endereco`='".$_POST['Endereco']."',`Numero`='".$_POST['Numero']."',`Bairro`='".$_POST['Bairro']."',`Estado`='".$_POST['Estado']."',`Cidade`='".$_POST['Cidade']."',`Telefone`='".$_POST['Foneres']."',`Celular`='".$_POST['Celular']."',`CPF`='".$_POST['Cpf']."',`RG`='".$_POST['Rg']."',`UF`='".$_POST['Uf']."',`Orgaoexpeditor`='".$_POST['Orgaoexp']."',`Email`='".$_POST['Email']."',`Estadonasc`='".$_POST['Estado1']."',`Cidnasc`='".$_POST['Cidade1']."',`Dianasc`='".$_POST['Data']."',`Idade`='".$_POST['Idade']."',`Nacionalidade`='".$_POST['Nacio']."',`Raça`='".$_POST['Raca']."',`Sexo`='".$_POST['Sexo']."',`Funcao`='".$_POST['Funcao']."',`Turno`='".$_POST['Turno']."',`estcivil`='".$_POST['EstadoCivil']."'WHERE  `tbfuncionario`.`codfuncionario`='".$_GET['codfuncionario']. "';";
	    mysql_query($cadastra);
		
		echo "<script>alert('Os dados foram Cadastrados com sucesso');</script>";
	   }		
	}  
?>

<html>

		<head> 
		
			<title> Alterar Funcionarios </title> 
			<link rel= "stylesheet" type="text/css" href="../css/style.css">
		
		</head>
	<body>
	
		
		<b><hr> <div class="t1">Alteração de Funcionarios </b><hr></div>
	<form Name="consultafuncionario" method="Post" action="alterarfuncionario.php?Funcao=pesquisar">
					
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
	<form Name="alterar" method="POST" action ="alterarfuncionario.php?Funcao=altera&codfuncionario=<?php echo $Res['codfuncionario'];?>">
	
				
			<fieldset>
			
			 <label for="logon">Código:</label>
			<div class="t2"><?php Echo $Res['codfuncionario'];?></div>
			<br />
				
			
			<label for="logon">Nome:</label>
			<div class="t2"><input type="text" id="logon" name="Nome" value="<?php Echo $Res['Nome'];?>" ></div>
			<br />
			
			
			<label for="logon">CEP:</label>
			<div class="t2"><input type="text" id="logon" name="Cep" value="<?php Echo $Res['CEP'];?>"></div>
			<br />
			
			
				
			
			<label for="logon">Endereço:</label>
			<div class="t2"><input type="text" id="logon" name="Endereco" value="<?php Echo $Res['Endereco'];?>"></div>
			<br />
			
			
			
			<label for="logon">Bairro:</label>
			<div class="t2"><input type="text" id="logon" name="Bairro" value="<?php Echo $Res['Bairro'];?>"></div>
			<br />
			
			<label for="logon">Numero:</label>
			<div class="t2"><input type="text" id="logon" name="Numero" value="<?php Echo $Res['Numero'];?>" ></div>
			<br />
		
			
			<label for="logon">Cidade:</label>
			<div class="t2"><input type="text" id="logon" name="Cidade" value="<?php Echo $Res['Cidade'];?>"></div>
			<br />
			
			
			<label for="Name"> Estado: </label>   
			
			<select name="Estado" id="estado" value="<?php Echo $Res['Estado'];?>">
									<option value="al">AL</option>
									<option value="am">AM</option>
									<option value="ap">AP</option>									
									<option value="ba">BA</option>
									<option value="ce">CE</option>
									<option value="df">DF</option>
									<option value="es">ES</option>
									<option value="go">GO</option>
									<option value="ma">MA</option>
									<option value="mg">MG</option>
									<option value="ms">MS</option>
									<option value="mt">MT</option>
									<option value="pa">PA</option>
									<option value="pe">PE</option>
									<option value="pr">PB</option>
									<option value="pb">PR</option>									
									<option value="pi">PI</option>
									<option value="rj">RJ</option>
									<option value="rj">RN</option>
									<option value="ro">RO</option>
									<option value="rs">RS</option>
									<option value="rr">RR</option>
									<option value="sc">SC</option>
									<option value="se">SE</option>
									<option value="sp">SP</option>
									<option value="to">TO</option> 
									</select>
		
		<br />
			<br />
		
			
			<label for="logon">Telefone:</label>
			<div class="t2"><input type="text" id="logon" name="Foneres" value="<?php Echo $Res['Telefone'];?>"></div>
			<br />
			
			
			<label for="logon">Celular:</label>
			<div class="t2"><input type="text" id="logon" name="Celular" value="<?php Echo $Res['Celular'];?>"></div>
			<br />
			<br>			
			<label for="Name"> CPF: </label>   
			<div class="t2"><input type="text" name="Cpf" id="cpf" value="<?php Echo $Res['CPF'];?>"> </div> 	
			<br />	
			
			<label for="Name"> RG: </label>  	
			<div class="t2"><input type="text" name="Rg" id="rg" value="<?php Echo $Res['RG'];?>"> </div> 	
			
			<br />	
			
			<label for="Name"> UF: </label>  	
			<div class="t2"><input type="text" name="Uf" id="uf" value="<?php Echo $Res['UF'];?>"></div> 				
			</br>
			
			<br />	
			
			<label for="Name"> Orgão Expeditor: </label>  	
			<div class="t2"><input type="text" name="Orgaoexp" id="orgaoexp" value="<?php Echo $Res['Orgaoexpeditor'];?>"></div> 				
			</br>
								
								
			<label for="logon">E-mail:</label>
			<div class="t2"><input type="text" id="logon" name="Email" value="<?php Echo $Res['Email'];?>"></div>
			
			<br />
								
				 
			<label for="logon">Estado civil:</label>
			<select name="EstadoCivil" value="<?php Echo $Res['estcivil'];?>">
					
					<option value="Casado">Casado</option>
					<option value="Solteiro">Solteiro</option>
					<option value="Viúvo">Viúvo</option>
					<option value="Separado">Separado</option>
										
				</Select>
			
			<br />
			<br />
			
			<br>
		<fieldset>
			<label for="Name"> Local de Nascimento </label>			
		</br>
		
		<br>				
			<label for="Name"> Estado: </label>   
			
			<select name="Estado1" id="estado1" value="<?php Echo $Res['Estadonasc'];?>">
									<option value="al">AL</option>
									<option value="am">AM</option>
									<option value="ap">AP</option>									
									<option value="ba">BA</option>
									<option value="ce">CE</option>
									<option value="df">DF</option>
									<option value="es">ES</option>
									<option value="go">GO</option>
									<option value="ma">MA</option>
									<option value="mg">MG</option>
									<option value="ms">MS</option>
									<option value="mt">MT</option>
									<option value="pa">PA</option>
									<option value="pe">PE</option>
									<option value="pr">PB</option>
									<option value="pb">PR</option>									
									<option value="pi">PI</option>
									<option value="rj">RJ</option>
									<option value="rj">RN</option>
									<option value="ro">RO</option>
									<option value="rs">RS</option>
									<option value="rr">RR</option>
									<option value="sc">SC</option>
									<option value="se">SE</option>
									<option value="sp">SP</option>
									<option value="to">TO</option> 
									</select>
		
		<br />
		
		<br>		
			<label for="Name"> Cidade: </label>  	
			<input type="text" name="Cidade1" id="cidade1" value="<?php Echo $Res['Cidnasc'];?>"> 			
		</br>	
		
				
		<br>		
			<label for="Name"> Data: </label>  	
			<input type="date" name="Data" id="data" value="<?php Echo $Res['Dianasc'];?>"> 
			<br>
			<br>
			<label for="Name"> Idade: </label>  	
			<input type="text" name="Idade" id="idade" value="<?php Echo $Res['Idade'];?>">			
		</br>
		
		<br>
				
			<label for="Name"> Nacionalidade: </label>  
			<input type="text" name="Nacio" id="nacio" value="<?php Echo $Res['Nacionalidade'];?>">			
							
		</br>	

		<br>		
			<label for="Name"> Raca: </label>  	
				
				<select name="Raca" id="raca" value="<?php Echo $Res['Raça'];?>">
				<option value="ranco">Branco</option>
				<option value="Negro">Negro</option>
				<option value="Indigena">indígena</option>
				<option value="Asiatico">Asiático</option>
				</select>			
		</br>		
		
		<br>
			<br>				
			<label for="Name"> Sexo: </label>   
			
			<select name="Sexo" id="sexo" value="<?php Echo $Res['Sexo'];?>">
									<option value="Masculino">Masculino</option>
									<option value="Feminino">Feminino</option>
									
									</select>
		</fieldset>
			
			<br />
			<br />
			
			<label for="logon">Função:</label>
			<div class="t2"><input type="text" id="logon" name="Funcao" value="<?php Echo $Res['Funcao'];?>"></div>
			</br>
			
			<label for="Name"> Turno: </label>   
			
			<select name="Turno" id="Turno" value="<?php Echo $Res['Turno'];?>">
									<option value="Manha">Manhã</option>
									<option value="Tarde">Tarde</option>
									<option value="Noite">Noite</option>
									
									</select>			
		<br>
		<br>
		 
		 </fieldset>
			
			<input name="Ok" type="submit"  value="Ok">
				<br />
				
               <?php }} ?>				
		
		<center><a href = "Administrativo.php">Voltar A Pagina Principal</a>
	</body>
	</form>
</html>