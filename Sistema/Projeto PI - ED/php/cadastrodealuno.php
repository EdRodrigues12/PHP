<?php
	include("../inc/conexao.php");
	if(isset ($_GET['Funcao'])){
		if ($_GET['Funcao']=="Cadastra"){
	    $cadastra = "INSERT INTO `bdcadastroetec`.`tbalunos`(`Matricula`,`Nome`,`CEP`,`Endereco`,`Numero`,`Bairro`,`Estado`,`Cidade`,`Telefone`,`Celular`,`CPF`,`RG`,`UF`,`Orgaoexp`,`Email`,`Estadonasc`,`Cidnasc`,`Dianasc`,`Idade`,`Nacionalidade`,`Raca`,`Sexo`,`Turma`,`Turno`,`Curso`) VALUES ('".$_POST['matricula']."','".$_POST['Nome']."','".$_POST['Cep']."','".$_POST['Endereco']."','".$_POST['Numero']."','".$_POST['Bairro']."','".$_POST['Estado']."','".$_POST['Cidade']."','".$_POST['Foneres']."','".$_POST['Celular']."','".$_POST['Cpf']."','".$_POST['Rg']."','".$_POST['Uf']."','".$_POST['Orgaoexp']."','".$_POST['Email']."','".$_POST['Estado1']."','".$_POST['Cidade1']."','".$_POST['Data']."','".$_POST['Idade']."','".$_POST['Nacio']."','".$_POST['Raca']."','".$_POST['Sexo']."','".$_POST['Turma']."','".$_POST['Turno']."','".$_POST['Curso']."');";
	    mysql_query($cadastra);
		
		echo "<script>alert('Os dados foram Cadastrados com sucesso');</script>";
	   }		
	}  
?>




<html>

		<head> 
		
			<title> Cadastro de Alunos </title> 
			<link rel= "stylesheet" type="text/css" href="../css/style.css">
		<script type="text/javascript" src="../js/jquery.js"></script>
		<script type="text/javascript" src="../js/ jquery.maskedinput.js"></script>
			
		</head>
		<script type="text/javascript">
				$(document).ready(function(){
					
						$("input.cpf").mask("999.999.999-99");
						$("input.Cep").mask("99.999-999");
				});
				</script>
		
		
					
	<body>
	<form name="cadastrodealuno" method="POST" action="cadastrodealuno.php?Funcao=Cadastra">
		
		
		<b><hr> <div class="t1">Cadastro de Alunos </b><hr></div>
	
		
		<fieldset>
		
			<label for="matricula"> Matricula: </label>   
			<div class="t2"><input type="text" name="matricula" id="matricula" ></div> 	

		
			<label for="Name"> Nome: </label>   
			<div class="t2"><input type="text" name="Nome" id="Nome" ></div> 	

</br>
		
					<label for="Name"> Cep: </label>   
			<div class="t2"><input type="text" class="Cep"  name="Cep" id="Cep" > </div> 			
					
	
		<br>
			<label for="Name"> Endereco: </label>   
			<div class="t2"><input type="text" name="Endereco" id="endereco" ></div> 	 
			
		<br>			
		
			<label for="Name"> Numero: </label>   
			<div class="t2"><input type="text" name="Numero" id="numero" ></div> 	 
			
		<br>
			<label for="Name"> Bairro: </label>   
			<div class="t2"><input type="text" name="Bairro" id="bairro" ></div> 	 
		
		
		<br>				
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

			<label for="Name"> Cidade: </label>   
			<div class="t2"><input type="text" name="Cidade" id="Cidade" ></div> 	 
			<br>			
				
			<label for="Name"> Fone Res: </label>   
			<div class="t2"><input type="text" name="Foneres" id="foneres" > </div> 	
				
				<br>
				
			<label for="Name"> Celular: </label>   
			<div class="t2"><input type="text" name="Celular" id="celular" > </div> 	
			<br />	
			
			
		
		    <br>			
			<label for="Name"> CPF: </label>   
			<div class="t2"><input type="text" class="cpf" name="Cpf" id="cpf" > </div> 	
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
		
		<br>		
			<label for="Name"> E-mail: </label>  	
			<div class="t2"><input type="text" name="Email" id="email" ></div> 				
		</br>
		
				
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
			
			<label for="Name"> Idade: </label>  	
			<input type="text" name="Idade" id="idade" >			
		</br>
		
		<br>
			<label for="Name"> Nacionalidade: </label>  
				<select name="Nacio" id="nacio">			
				<option value="Brasileira">Brasileira</option>
				<option value="Americana">Americana</option>
				<option value="Asiática">Asiática</option>
				<option value="Europeia">Europeia</option>
				</select>			
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
		<br>		
			<label for="Curso"> Curso: </label>  	
			<div class="t2"><input type="text" name="Curso" id="curso" ></div> 				
		</br>
		
		<br>		
			<label for="Turma"> Turma: </label>  	
			<div class="t2"><input type="text" name="Turma" id="turma" ></div> 				
		</br>
			
			<label for="Name"> Turno: </label>   
			
			<select name="Turno" id="Turno">
									<option value="Manha">Manhã</option>
									<option value="Tarde">Tarde</option>
									<option value="Noite">Noite</option>
									
									</select>			
		<br>
		<br>
		
		<Input type="submit" name="OK" ID="OK" VALUE="OK" Onclick="validador()">
				
	<center><a href = "Administrativo.php">Voltar A Pagina Principal</a>
	</body>
	</form>

</html>