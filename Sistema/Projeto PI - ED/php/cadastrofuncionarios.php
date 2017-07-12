<?php
	include("../inc/conexao.php");
	if(isset ($_GET['Funcao'])){
		if ($_GET['Funcao']=="Cadastra"){
	    $cadastra = "INSERT INTO `bdcadastroetec`.`tbfuncionario`(`codfuncionario`,`Nome`,`CEP`,`Endereco`,`Numero`,`Bairro`,`Estado`,`Cidade`,`Telefone`,`Celular`,`CPF`,`RG`,`UF`,`Orgaoexpeditor`,`Email`,`Estadonasc`,`Cidnasc`,`Dianasc`,`Idade`,`Nacionalidade`,`Raça`,`Sexo`,`Funcao`,`Turno`,`estcivil`) VALUES ('".$_POST['cod']."','".$_POST['Nome']."','".$_POST['Cep']."','".$_POST['Endereco']."','".$_POST['Numero']."','".$_POST['Bairro']."','".$_POST['Estado']."','".$_POST['Cidade']."','".$_POST['Foneres']."','".$_POST['Celular']."','".$_POST['Cpf']."','".$_POST['Rg']."','".$_POST['Uf']."','".$_POST['Orgaoexp']."','".$_POST['Email']."','".$_POST['Estado1']."','".$_POST['Cidade1']."','".$_POST['Data']."','".$_POST['Idade']."','".$_POST['Nacio']."','".$_POST['Raca']."','".$_POST['Sexo']."','".$_POST['Funcao']."','".$_POST['Turno']."','".$_POST['EstadoCivil']."');";
	    mysql_query($cadastra);
		
		echo "<script>alert('Os dados foram Cadastrados com sucesso');</script>";
	   }		
	}  
?>


<html>
	<head>
		<title> Cadastro de Funcionários </title>
		<link rel="stylesheet" href="..\css\style.css">
		
	</head>
	
	<body>
	
		 
		
			<b><hr> <div class="t1">Cadastro de Funcionários </b><hr></div>
				
			<fieldset>
			<form name="funcionario" method="POST" action="cadastrofuncionarios.php?Funcao=Cadastra">
			 <label for="logon">Código:</label>
			<div class="t2"><input type="text" id="cod" name="cod" ></div>
			<br />
				
			
			<label for="logon">Nome:</label>
			<div class="t2"><input type="text" id="logon" name="Nome" ></div>
			<br />
			
			
			<label for="logon">CEP:</label>
			<div class="t2"><input type="text" id="logon" name="Cep"></div>
			<br />
			
			
				
			
			<label for="logon">Endereço:</label>
			<div class="t2"><input type="text" id="logon" name="Endereco"></div>
			<br />
			
			
			
			<label for="logon">Bairro:</label>
			<div class="t2"><input type="text" id="logon" name="Bairro"></div>
			<br />
			
			<label for="logon">Numero:</label>
			<div class="t2"><input type="text" id="logon" name="Numero"></div>
			<br />
		
			
			<label for="logon">Cidade:</label>
			<div class="t2"><input type="text" id="logon" name="Cidade"></div>
			<br />
			
			
			<label for="Name"> Estado: </label>   
			
			<select name="Estado" id="estado">
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
			<div class="t2"><input type="text" id="logon" name="Foneres"></div>
			<br />
			
			
			<label for="logon">Celular:</label>
			<div class="t2"><input type="text" id="logon" name="Celular"></div>
			<br />
			<br>			
			<label for="Name"> CPF: </label>   
			<div class="t2"><input type="text" name="Cpf" id="cpf" > </div> 	
			<br />	
			
			<label for="Name"> RG: </label>  	
			<div class="t2"><input type="text" name="Rg" id="rg" > </div> 	
			
			<br />	
			
			<label for="Name"> UF: </label>  	
			<div class="t2"><input type="text" name="Uf" id="uf" ></div> 				
			</br>
			
			<br />	
			
			<label for="Name"> Orgão Expeditor: </label>  	
			<div class="t2"><input type="text" name="Orgaoexp" id="orgaoexp" ></div> 				
			</br>
								
								
			<label for="logon">Email:</label>
			<div class="t2"><input type="text" id="logon" name="Email"></div>
			
			<br />
								
				 
			<label for="logon">Estado civil:</label>
			<select name="EstadoCivil">
					<option selected value="  ">  </option>
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
			
			<select name="Estado1" id="estado1">
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
			<input type="text" name="Cidade1" id="cidade1" > 			
		</br>	
		
				
		<br>		
			<label for="Name"> Data: </label>  	
			<input type="date" name="Data" id="data" > 
			<br>
			<br>
			<label for="Name"> idade: </label>  	
			<input type="text" name="Idade" id="idade" >			
		</br>
		
		<br>
				
			<label for="Name"> Nacionalidade: </label>  
			<input type="text" name="Nacio" id="nacio" >			
							
		</br>	

		<br>		
			<label for="Name"> Raca: </label>  	
				
				<select name="Raca" id="raca">
				<option value="ranco">Branco</option>
				<option value="Negro">Negro</option>
				<option value="Indigena">indígena</option>
				<option value="Asiatico">Asiático</option>
				</select>			
		</br>		
		
		<br>
			<br>				
			<label for="Name"> Sexo: </label>   
			
			<select name="Sexo" id="sexo">
									<option value="Masculino">Masculino</option>
									<option value="Feminino">Feminino</option>
									
									</select>
		</fieldset>
			
			<br />
			<br />
			
			<label for="logon">Função:</label>
			<div class="t2"><input type="text" id="logon" name="Funcao"></div>
			</br>
			
			<label for="Name"> Turno: </label>   
			
			<select name="Turno" id="Turno">
									<option value="Manha">Manhã</option>
									<option value="Tarde">Tarde</option>
									<option value="Noite">Noite</option>
									
									</select>			
		<br>
		<br>
		 
		 </fieldset>
			
			<input name="Ok" type="submit"  value="Ok">
				<br />
               				
		
		<center><a href = "Administrativo.php">Voltar A Pagina Principal</a>
	</body>
	</form>
</html>