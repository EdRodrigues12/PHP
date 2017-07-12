<?php
	include("../inc/conexao.php");
		 if ($_GET['Funcao'] == "altera"){
			$SQLalterar ="UPDATE `bdcadastroetec`.`tbdisciplinas` SET `Nome` = '".$_POST['Nome']."',`Descricao`='".$_POST['Desc']."',`Sigla`='".$_POST['Sigla']."' WHERE  `tbdisciplinas`.`coddisciplina`='".$_GET['coddisciplina']. "';";
			mysql_query($SQLalterar);
			echo "<script>alert('Os dados foram alterado com sucesso');</script>";
			
		}
?>



<html>

		<head> 
		
			<title> Alterar Disciplinas </title> 
			<link rel= "stylesheet" type="text/css" href="../css/style.css">
		
		</head>
	<body>
	
		
		<b><hr> <div class="t1">Alteração de disciplinas </b><hr></div>
	<form Name="alterardisciplinas" method="Post" action="alterardisciplinas.php?Funcao=pesquisar">
					
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
						
			<form Name="alterar" method="POST" action ="alterardisciplinas.php?Funcao=altera&coddisciplina=<?php echo $Res['coddisciplina'];?>">
		<fieldset>
		
			
			<label for="codigo"> Codigo: </label>   
			<div class="t2"><?php Echo $Res['coddisciplina'];?></div> 	
			<br>
			<br>
			<label for="Name"> Nome: </label>   
			<div class="t2"><input type = "text" name= "Nome" ID="Nome" value="<?php Echo $Res['Nome'];?>"></div> 
			<br>
			<br>
			<label for="Name"> Descrição: </label>   
			<div class="t2"><input type = "text" name= "Desc" ID="desc" value="<?php Echo $Res['Descricao'];?>"></div> 	

			</br>
			<br>
		
			<label for="Name"> Sigla: </label>   
			 			
			<input type = "text" name= "Sigla" ID="Nome" VALUE="<?php Echo $Res['Sigla'];?>">
										
		<br>
		<br>
		 
			
					
				
		</fieldset>		
		<br>
		<br>
		<input type="submit" Name="OK" VALUE="OK">	
		<br>
		<br>		
	
	 <?php }} ?>
	 <center><a href = "Administrativo.php">Voltar A Pagina Principal</a>
	</body>
			</form>
		</html>