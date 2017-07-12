<html>
	<head>
		<title> Consulta de professores </title>
		<link rel="stylesheet" href="..\css\style.css">
		
	</head>
	
	<body>
	
		 
		<form name="responsavel"  method="POST" action="consultaprofessores.php?Funcao=pesquisar">
			<b><hr> <div class="t1">Consulta de professores </b><hr></div>
			
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
				
			<fieldset>
			
			 <label for="logon">Codigo:</label>
			<?php Echo $Res['Codigo'];?>
			<br />
			<br />	
						
			<label for="logon">Materia:</label>
			<?php Echo $Res['Materia'];?>
			<br />
			<br />
			
			<label for="logon">Nome:</label>
			<?php Echo $Res['Nome'];?>
			<br />
			<br />
			
			<label for="logon">CEP:</label>
			<?php Echo $Res['CEP'];?>
			<br />
			<br />
			
			<label for="nascimento">Data de Nasc.:</label>
			<?php Echo $Res['Dtnasc'];?>
			<br />
			<br />
			
			<label for="logon">Endereço:</label>
			<?php Echo $Res['Endereco'];?>
			<br />
			<br />
			
			
			<label for="logon">Bairro:</label>
			<?php Echo $Res['Bairro'];?>
			<br />
		<br />
			
			<label for="logon">Cidade:</label>
			<?php Echo $Res['Cidade'];?>
			<br />
			<br />
			
			<label for="Name"> Estado: </label>   
			
			<?php Echo $Res['Estado'];?>
			<br />
		    <br />
			
			<label for="logon">Telefone:</label>
			<?php Echo $Res['Telefone'];?>
			<br />
			<br />
			
			<label for="logon">Celular:</label>
			<?php Echo $Res['Celular'];?>
			<br />
			<br />
			
			<label for="Name"> Nacionalidade: </label>  
				<?php Echo $Res['Nacionalidade'];?>
			<br />
			<br />
			
		
			
			<label for="logon">E-mail:</label>
			<?php Echo $Res['Email'];?>
			
			<br />
			<br />
			
			
			
	 
			<label for="logon">Estado civil:</label>
			<?php Echo $Res['Estcivil'];?>
			
			<br />
			<br />
			
			<label for="logon">Sexo:</label>
			<?php Echo $Res['Sexo'];?>
			
			<br />
			<br />
		 
		 </fieldset>
			
			<?php }} ?>
				<br />
                <br />				
		
		<center><a href = "Administrativo.php">Voltar A Pagina Principal</a>
	</body>
	
</html>