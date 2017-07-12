<?php
	include("../inc/conexao2.php");
		if ($_GET['Funcao']=="Cadastrar"){
	    $cadastra = "INSERT INTO `bd_form`.`cadastro`(`Nome`,`Endereco`,`Bairro`,`CEP`,`Cidade`,`Estado`) VALUES ('".$_POST['Nome']."','".$_POST['Endereco']."','".$_POST['Bairro']."','".$_POST['CEP']."','".$_POST['Cidade']."','".$_POST['Estado']."');";
	    mysql_query($cadastra);
	   }		
?>
<html>
<head>
	<title>Formulario</title>
		<script>
			function validador(){
				if(document.getElementById("Nome").value == ""){
					alert("O campo nome esta em branco");
				}
				if(document.getElementById("Endereco").value == ""){
					alert("O campo endereço esta em branco");
				}
				if(document.getElementById("Bairro").value == ""){
					alert("O campo bairro esta em branco");
				}
				if(document.getElementById("CEP").value == ""){
					alert("O campo CEP esta em branco");
				}
				if(document.getElementById("Cidade").value == ""){
					alert("O campo Cidade esta em branco");
				}
			}
		</script>
</head>
<body>
<form name = "cadastro" method="POST" action="Formulario2.php?Funcao=Cadastrar">
	<table Border ="1">
	   <tr>
			<td>
			Nome:
			</td>
			<td>
			
			<input type = "text" name = "Nome" ID = "Nome" size= "50">
			</td>
	   </tr>
		<tr>
			<td>
			Endereco:
			</td>
		     <td>
			
			<input type = "text" name = "Endereco" ID = "Endereco" size= "50">
			</td>
	  </tr>
	   <tr>
			<td>
			Bairro:
			</td>
			<td>
			<input type = "text" name = "Bairro" ID = "Bairro" size= "40">
			</td>
	   </tr>
	    <tr>
			<td>
			CEP:
			</td>
			<td>
			<input type = "text" name = "CEP" ID = "CEP" size= "50">
			</td>
	   </tr>
	    <tr>
			<td>
			Cidade:
			</td>
			<td>
				<input type = "text" name = "Cidade" ID = "Cidade" size= "50">
			</td>
	  </tr>
	  <tr>
			<td>
			Estado:
			</td>
			<td>
			<select name = "Estado" ID = " Estado">
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
			
			<!--<input type = " text" name = "Estado" ID = "Estado" size= " 10">-->
			</tr>
	        </td>
				<tr>
				<td>
				<Input type="submit" name="Enviar" ID="Enviar" VALUE="Enviar" Onclick="validador()">
				
				</td>
				
				
				<td>
				<Input type="Reset" name="Cancelar" ID="Cancelar" VALUE="Cancelar">
				</tr>
				</td>
				
				
				</body>
				</form>
				</html>
				
				
				


			