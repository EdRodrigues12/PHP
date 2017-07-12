
<html>

	<head> 
	<title> Consulta de disciplinas </title>
		<link rel="stylesheet" type="text/css" href="../css/style.css"> 
	</head>

		<body > 
			
			<b><hr><div class="t1">Consulta de Disciplinas</div><hr></b> 
			
				<form Name="consultadisc" method="Post" action="Consultadisciplina.php?Funcao=pesquisar">
					
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
						$SQLpesquisar="SELECT * FROM `tbdisciplinas` WHERE `Nome` LIKE '%".$_POST['Nome']."%';";
							$Total=mysql_query($SQLpesquisar);
								while ($Res=mysql_fetch_array($Total)){
									?>
			<fieldset>
				<br>
				<label for="Código:"><b>Codigo:</b></label>		
				<?php Echo $Res['coddisciplina'];?>
				<br>
				<br>
				<label for="Código:"><b>Nome :</b></label>		
				<?php Echo $Res['Nome'];?>
				<br>
				<br>	
				<label for="Sigla"><b>Sigla :</b></label>
				<?php Echo $Res['Sigla'];?>
				<br>	
			
				<br>
				<label for="Descrição"><p><b>Descricao:</b></p></label>
				<?php Echo $Res['Descricao'];?>
				</fieldset>	
				
				
				<center><a href = "Administrativo.php">Voltar A Pagina Principal</a>
			<?php }} ?>
	 </body> 
	 
</html>