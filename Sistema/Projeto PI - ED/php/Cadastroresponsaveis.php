<?php
	include("../inc/conexao.php");
	if(isset ($_GET['Funcao'])){
		if ($_GET['Funcao']=="Cadastra"){
	    $cadastra = "INSERT INTO `bdcadastroetec`.`tbresponsaveis`(`Nome`,`CEP`,`Endereco`,`Numero`,`Bairro`,`Estado`,`Cidade`,`Telefonecasa`,`Telefonetrab`,`Celular`,`CPF`,`RG`,`Email`,`Datanasc`,`Idade`,`Nacionalidade`,`Raça`,`Cor`,`Profissao`,`Sexo`) VALUES ('".$_POST['Nome']."','".$_POST['CEP']."','".$_POST['Endereco']."','".$_POST['Numero']."','".$_POST['Bairro']."','".$_POST['Estado']."','".$_POST['Cidade']."','".$_POST['Foneres']."','".$_POST['Fonecom']."','".$_POST['Celular']."','".$_POST['CPF']."','".$_POST['RG']."','".$_POST['Email']."','".$_POST['Nasc']."','".$_POST['Idade']."','".$_POST['Nacionalidade']."','".$_POST['Raca']."','".$_POST['Cor']."','".$_POST['Profissa']."','".$_POST['Sexo']."');";
	    mysql_query($cadastra);
		echo "<script>alert('Os dados foram Cadastrados com sucesso');</script>";
	   }		
	}  
?>

<html>

	<head>
		<title>Cadastro de Responsáveis</title>
		<link rel= "stylesheet" type="text/css" href="../css/style.css">
	<head>

	<body>
	
		<form name="responsavel" method="POST" action="Cadastroresponsaveis.php?Funcao=Cadastra">
		<b><hr><div class="t1">Cadastro de Responsáveis</div><hr></b> 
		<fieldset>
				
				<label for="Name"> Nome: </label> 
				<input type="text" name="Nome" id="Nome">
				<br>
				<br>
				<label for="Name"> Cep: </label> 
				<input type="text" name="CEP" id="CEP">
				<br>
				<br>
				<label for="Name"> Endereco: </label> 
				<input type="text" name="Endereco" id="Endereco">
				<br>
				<br>
				<label for="Name"> Numero: </label> 
				<input type="text" name="Numero" id="Numero">
				<br>
				<br>
				<label for="Name"> Bairro: </label>   
				<input type="text" name="Bairro" id="Bairro">
				<br>
				<br>
				<label for="Name"> Estado: </label>
				<select name="Estado" id="Estado">
					<option selected value="  ">  </option>
					<option value="AC">AC</option>
					<option value="AL">AL</option>
					<option value="AP">AP</option>
					<option value="AM">AM</option>
					<option value="BA">BA</option>
					<option value="CE">CE</option>
					<option value="DF">DF</option>
					<option value="ES">ES</option>
					<option value="GO">GO</option>
					<option value="MA">MA</option>
					<option value="MT">MT</option>
					<option value="MS">MS</option>
					<option value="MG">MG</option>
					<option value="PA">PA</option>
					<option value="PB">PB</option>
					<option value="PR">PR</option>
					<option value="PE">PE</option>
					<option value="PI">PI</option>
					<option value="RJ">RJ</option>
					<option value="RN">RN</option>
					<option value="RS">RS</option>
					<option value="RO">RO</option>
					<option value="RR">RR</option>
					<option value="SC">SC</option>
					<option value="SP">SP</option>
					<option value="SE">SE</option>
					<option value="TO">TO</option>
					
				</Select>
				<br>
				<br>
				<label for="Name"> Cidade: </label> 
				<input type="text" name="Cidade" id="Cidade">
				<br>
				<br>
				<label for="Name"> Fone Res: </label> 
				<input type="text" name="Foneres" id="Foneres">
				<br>
				<br>
				<label for="Name"> Fone Com.: </label> 
				<input type="text" name="Fonecom" id="Fonecom">
				<br>
				<br>
				<label for="Name"> Celular: </label>  
				<input type="text" name="Celular" id="Celular">
				<br>
				<br>
				<label for="Name"> CPF: </label>  
				<input type="text" name="CPF" id="CPF">
				<br>
				<br>
				<label for="Name"> RG: </label>  
				<input type="text" name="RG" id="RG">
				<br>
				<br>
				<label for="Name"> E-mail: </label> 
				<input type="text" name="Email" id="Email">
				<br>
				<br>
				<label for="Name"> Profissão: </label>   
				<td><input type="text" name="Profissa" id="Profissa"></td>
				<br>
				<br>
				<fieldset>
				<b><label for="Name">  Nascimento </label></b>			
				<br>
				<br>
				<label for="Name"> Data Nasc.: </label> 
				<input type="date" name="Nasc" id="Nasc">
				<br>
				<br>
				<label for="Name"> Idade: </label>  
				<input type="text" name="Idade" id="Idade">
				<br>
				<br>
				<label for="Name"> Nacionalidade: </label>
				<input type="text" name="Nacionalidade" id="nacio">	
				<br>
				<br>
				<label for="Name"> Raca: </label> 
				<select name="Raca" id ="Raca">
				<option value="ranco">Negro</option>
				<option value="Negro">Indígena</option>
				<option value="Indigena">Branco</option>
				<option value="Asiatico">Asiático</option>
				</select>
				<br>
				<br>
				<label for="Name"> Cor: </label>   
				
				<select name="Cor" id="Cor">
				<option value="Branca">Negro</option>
				<option value="Negra">Pardo</option>
				<option value="Parda">Branco</option>
				<option value="Amarela">Amarelo</option>
				<option value="Outra">Outros</option>
				</select>
				<br>
				<br>
				
				<label for="Name"> Sexo: </label>     
				<select name="Sexo" id="sexo">
				<option value="Masculino">Masculino</option>
				<option value="Feminino">Feminino</option>
									
				</select>
				</fieldset>
				
				
				
		
	</fieldset>
	<br>
	<Input type="submit" name="OK" ID="OK" VALUE="OK" Onclick="validador()">
	<br>
	<center><a href = "Administrativo.php">Voltar A Pagina Principal</a>
	</body>
	</form>
</html>