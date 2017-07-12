<?php
	include("../inc/conexao.php");
		 if ($_GET['Funcao'] == "altera"){
			$SQLalterar ="UPDATE `bdcadastroetec`.`tbcurso` SET `Nome` = '".$_POST['Nome']."',`Periodo`='".$_POST['Periodo']."',`Escola`='".$_POST['Escola']."',`Cidade`='".$_POST['Cidade']."',`Ano`='".$_POST['Ano']."' WHERE  `tbcurso`.`codcurso`='".$_GET['codcurso']. "';";
			mysql_query($SQLalterar);
			echo "<script>alert('Os dados foram alterado com sucesso');</script>";
			
		}
?>



<html>

		<head> 
		
			<title> Alterar Cursos </title> 
			<link rel= "stylesheet" type="text/css" href="../css/style.css">
		
		</head>
	<body>
	
		
		<b><hr> <div class="t1">Alteração de cursos </b><hr></div>
	<form Name="alterarcurso" method="Post" action="alterarcurso.php?Funcao=pesquisar">
					
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
						
			<form Name="alterar" method="POST" action ="alterarcurso.php?Funcao=altera&codcurso=<?php echo $Res['codcurso'];?>">
		<fieldset>
		
			<label for="codigo"> Codigo: </label>   
			<div class="t2"><?php Echo $Res['codcurso'];?></div> 	

		
			<label for="Name"> Curso: </label>   
			<div class="t2"><input type = "text" name= "Nome" ID="Nome" value="<?php Echo $Res['Nome'];?>"></div> 	

		</br>
		
			<label for="Name"> Periodo: </label>   
			 			
			<select name="Periodo" id="Periodo" VALUE="<?php Echo $Res['Periodo'];?>">
									<option value="Manha">Manhã</option>
									<option value="Tarde">Tarde</option>
									<option value="Noite">Noite</option>
									
									</select>		
		<br>
		<br>
			<label for="Name"> Escola: </label>   
			<div class="t2"><input type = "text" name= "Escola" ID="Nome" value="<?php Echo $Res['Escola'];?>"></div> 	 
			
		<br>			
		
			<label for="Name"> Cidade: </label>   
			<div class="t2"><input type = "text" name= "Cidade" ID="Nome" value="<?php Echo $Res['Cidade'];?>"></div> 	 
			
		<br>
			<label for="Name"> Ano: </label>   
			<div class="t2"><input type = "text" name= "Ano" ID="Nome" value="<?php Echo $Res['Ano'];?>"></div> 	 
		
		
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