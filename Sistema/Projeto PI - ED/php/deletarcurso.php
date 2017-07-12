<?php
	include("../inc/conexao.php");
		 if ($_GET['Funcao'] == "deletar"){
			$SQLdeletar ="DELETE FROM `bdcadastroetec`.`tbcurso` WHERE `codcurso` = '".$_GET['codcurso']."';";			
				mysql_query($SQLdeletar);
					echo "<script>alert('Os dados foram apagados com sucesso');</script>";
			
		}
?>

<html>

		<head> 
		
			<title> Deletar Cursos </title> 
			<link rel= "stylesheet" type="text/css" href="../css/style.css">
		
		</head>
	<body>
	
		
		<b><hr> <div class="t1">Deletar cursos </b><hr></div>
	<form Name="deletarcurso" method="Post" action="deletarcurso.php?Funcao=pesquisar">
					
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
						$SQLpesquisar="SELECT * FROM `tbcurso` WHERE `Nome` LIKE '%".$_POST['Nome']."%';";
							$Total=mysql_query($SQLpesquisar);
								while ($Res=mysql_fetch_array($Total)){
									?>
						
			<form Name="deletar" method="POST" action ="deletarcurso.php?Funcao=deletar&codcurso=<?php echo $Res['codcurso'];?>">
		<fieldset>
		
			<label for="codigo"> Codigo: </label>   
			<div class="t2"><?php Echo $Res['codcurso'];?></div> 	

		
			<label for="Name"> Curso: </label>   
			<div class="t2"><?php Echo $Res['Nome'];?></div> 	

		</br>
		
			<label for="Name"> Periodo: </label>   
			 			
			<?php Echo $Res['Periodo'];?>
										
		<br>
		<br>
			<label for="Name"> Escola: </label>   
			<?php Echo $Res['Escola'];?> 	 
			
		<br>			
		
			<label for="Name"> Cidade: </label>   
			<?php Echo $Res['Cidade'];?>	 
			
		<br>
			<label for="Name"> Ano: </label>   
			<?php Echo $Res['Ano'];?>	 
		
		
		<br>				
				
		</fieldset>		
		<br>
		<br>
		<input type="submit" Name="Deletar" VALUE="Deletar">	
		<br>
		<br>		
	
	 <?php }} ?>
	 <center><a href = "Administrativo.php">Voltar A Pagina Principal</a>
	</body>
			</form>
		</html>