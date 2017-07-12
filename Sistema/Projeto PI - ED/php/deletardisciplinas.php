<?php
	include("../inc/conexao.php");
		 if ($_GET['Funcao'] == "deleta"){
			$SQLdeletar ="DELETE FROM `bdcadastroetec`.`tbdisciplinas` WHERE `coddisciplina` = '".$_GET['coddisciplina']."';";			
				mysql_query($SQLdeletar);
					echo "<script>alert('Os dados foram apagados com sucesso');</script>";
			
		}
?>

<html>

		<head> 
		
			<title> Deletar Disciplinas </title> 
			<link rel= "stylesheet" type="text/css" href="../css/style.css">
		
		</head>
	<body>
	
		
		<b><hr> <div class="t1">Deletar disciplinas </b><hr></div>
	<form Name="deletardisciplinas" method="Post" action="deletardisciplinas.php?Funcao=pesquisar">
					
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
						
			<form Name="deletar" method="POST" action ="deletardisciplinas.php?Funcao=deleta&coddisciplina=<?php echo $Res['coddisciplina'];?>">
		<fieldset>
		
			
			<label for="codigo"> Codigo: </label>   
			<div class="t2"><?php Echo $Res['coddisciplina'];?></div> 	
			<br>
			<br>
			<label for="Name"> Nome: </label>   
			<div class="t2"><?php Echo $Res['Nome'];?></div> 
			<br>
			<br>
			<label for="Name"> Descrição: </label>   
			<div class="t2"><?php Echo $Res['Descricao'];?></div> 	

			</br>
			<br>
		
			<label for="Name"> Sigla: </label>   
			 			
			<?php Echo $Res['Sigla'];?>
										
		<br>
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