<?php
	include("../inc/conexao.php");
	if(isset ($_GET['Funcao'])){
		if ($_GET['Funcao']=="Cadastra"){
	    $cadastra = "INSERT INTO `bdcadastroetec`.`tbprofessores`(`Codigo`,`Nome`,`CEP`,`Dtnasc`,`Endereco`,`Bairro`,`Cidade`,`Estado`,`Telefone`,`Celular`,`Nacionalidade`,`Email`,`Estcivil`,`Sexo`,`Materia`) VALUES ('".$_POST['codigo']."','".$_POST['nome']."','".$_POST['cep']."','".$_POST['nascimento']."','".$_POST['endereco']."','".$_POST['bairro']."','".$_POST['cidade']."','".$_POST['estado']."','".$_POST['telefone']."','".$_POST['celular']."','".$_POST['nacionalidade']."','".$_POST['email']."','".$_POST['EstadoCivil']."','".$_POST['Sexo']."','".$_POST['materia']."');";
	    mysql_query($cadastra);
		
		echo "<script>alert('Os dados foram Cadastrados com sucesso');</script>";
	   }		
	}  
?>


<html>
	<head>
		<title> Cadastro de professores </title>
		<link rel="stylesheet" href="..\css\style.css">
		
	</head>
	
	<body>
	
		 
		<form name="responsavel"  method="POST" action="cadastroprofessores.php?Funcao=Cadastra">
			<b><hr> <div class="t1">Cadastro de professores </b><hr></div>
				
			<fieldset>
			<form name="professores", method="post",action="">
			 <label for="logon">Codigo:</label>
			<div class="t2"><input type="text" id="logon" name="codigo"></div>
			<br />
				
						
			<label for="logon">Materia:</label>
			<div class="t2"><input type="text" id="logon" name="materia"></div>
			<br />
			
			
			<label for="logon">Nome:</label>
			<div class="t2"><input type="text" id="logon" name="nome"></div>
			<br />
			
			
			<label for="logon">CEP:</label>
			<div class="t2"><input type="text" id="logon" name="cep"></div>
			<br />
			
			
			<label for="nascimento">Data de Nasc.:</label>
			<div class="t2"><input name="nascimento" type="date"/></div>
			<br />
			
			
			<label for="logon">Endereço:</label>
			<div class="t2"><input type="text" id="logon" name="endereco"></div>
			<br />
			
			
			
			<label for="logon">Bairro:</label>
			<div class="t2"><input type="text" id="logon" name="bairro"></div>
			<br />
		
			
			<label for="logon">Cidade:</label>
			<div class="t2"><input type="text" id="logon" name="cidade"></div>
			<br />
			
			
			<label for="Name"> Estado: </label>   
			
			<select name="estado" id="estado">
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
			<div class="t2"><input type="text" id="logon" name="telefone"></div>
			<br />
			
			
			<label for="logon">Celular:</label>
			<div class="t2"><input type="text" id="logon" name="celular"></div>
			<br />
			
			
			<label for="Name"> Nacionalidade: </label>
			<input type="text" id="nacionalidade" name="nacio">	
				
			<br />
			<br />
			
		
			
			<label for="logon">E-mail:</label>
			<div class="t2"><input type="text" id="email" name="email"></div>
			
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
			
			<label for="logon">Sexo:</label>
			<select name="Sexo">
					<option selected value="  ">  </option>
					<option value="Masculino">Masculino</option>
					<option value="Feminino">Feminino</option>
					
										
				</Select>
			
			<br />
			<br />
		 
		 </fieldset>
			
			<input name="Ok" type="submit"  value="Ok">
				<br />
                <br />				
		
		<center><a href = "Administrativo.html">Voltar A Pagina Principal</a>
	</body>
	</form>
</html>