<html>

	<head>
	<title>Consulta Curso</title>
		<link rel= "stylesheet" type="text/css" href="../css/style.css">
		
	</head>	
	
	<body>
	<form name="curso" method="POST" action="Consultacurso.php?Funcao=pesquisar">
		<b><hr> <div class="t1">Cadastro de Curso </b><hr></div>
		<table border="1">
						<label for="Name"> Curso: </label>   
		<div class="t2"><input type="text" name="Nome" id="Nome" ></div> 	

						<br>
						
						<input type="submit" Name="OK" VALUE="OK">
								
					</table>
	</form>
	<?php
				include("../inc/conexao.php");
					if($_GET['Funcao']=="pesquisar"){
						$SQLpesquisar="SELECT * FROM `tbcurso` WHERE `Nome` LIKE '%".$_POST['curso']."%';";
							$Total=mysql_query($SQLpesquisar);
								while ($Res=mysql_fetch_array($Total)){
									?>
	<fieldset>
	
		<br>	
		
			<label for="Nome">Código:</label>				
			<?php Echo $Res['codcurso'];?>	
			
		</br>
		
		
		<br>	
		
			<label for="Nome">Curso :</label>				
			<?php Echo $Res['Nome'];?>	
			
		<br>
		<br>
		
		
			<label for="Nome">Descrição:</label>				
			<?php Echo $Res['Descricao'];?>	
			
		<br>
		
		<br>	
		
			<label for="Nome">Escola:</label>				
			<?php Echo $Res['Escola'];?> 	
			
		</br>
		
		<br>	
		
			<label for="Nome">Cidade:</label>				
			<?php Echo $Res['Cidade'];?> 	
			
		<br>

		<br>	
		
			<label for="Name"> Turno: </label>   
			<?php Echo $Res['Periodo'];?>
				
			
		<br>

		<br>	
		
			<label for="Nome">Ano:</label>				
			<?php Echo $Res['Ano'];?>	
			
		<br>				
		
		
			</fieldset>
			<?php }} ?>
				
							
		<br>
		<center><a href = "Administrativo.php">Voltar A Pagina Principal</a>	
		
	</body>
	
</html>