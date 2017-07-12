<html>

	<head>
	
		<title>	Consulta Turma </title>
		
	</head>	
		
	<body>
	<link rel="stylesheet" href="..\css\style.css">
		<b><hr> <div class="t1">Consulta de Turma </b><hr></div>
		<form name="turma"  method="post" action="Consultaturma.php?Funcao=pesquisar">
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
						$SQLpesquisar="SELECT * FROM `tbcadastroturma` WHERE `Nome` LIKE '%".$_POST['Nome']."%';";
							$Total=mysql_query($SQLpesquisar);
								while ($Res=mysql_fetch_array($Total)){
									?>
		
		
		
		
	<fieldset>
	
			<br>	
			
				<label for="Nome">Código:</label>				
				<?php Echo $Res['codturma'];?>
				
			</br>
			
			
			<br>	
			
				<label for="Nome">Nome:</label>				
				<?php Echo $Res['Nome'];?> 
				
			</br>
			
			<br>	
			
				<label for="Nome">Curso:</label>				
				<?php Echo $Res['Curso'];?> 
				
			</br>
			
			
			
			<br>	
			
				<label for="Nome">Ano:</label>				
				<?php Echo $Res['Ano'];?> 
				
			</br>			
				
			<br>
			
				
				
			</br>
			
			<br>
			
				<label for="Name"> Turno: </label>   
			
				<?php Echo $Res['Turno'];?>
				</fieldset>
				<?php }} ?>
			</br>
			
			<br>
							
						
		<center><a href = "Administrativo.php">Voltar A Pagina Principal</a>
	</body>
	
</html>