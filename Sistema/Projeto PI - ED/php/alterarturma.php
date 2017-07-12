<?php
	include("../inc/conexao.php");
	if(isset ($_GET['Funcao'])){
		if ($_GET['Funcao']=="altera"){
	    $cadastra = "UPDATE `bdcadastroetec`.`tbcadastroturma` SET `Nome` ='".$_POST['nome']."' ,`Curso`='".$_POST['curso']."',`Ano`='".$_POST['ano']."',`Turno`='".$_POST['turno']."'WHERE  `tbcadastroturma`.`codturma`='".$_GET['codturma']. "';"; 
	    mysql_query($cadastra);
		
		echo "<script>alert('Os dados foram Cadastrados com sucesso');</script>";
	   }		
	}  
?>


<html>

		<head> 
		
			<title> Alterar Turmas </title> 
			<link rel= "stylesheet" type="text/css" href="../css/style.css">
		
		</head>
	<body>
	
		
		<b><hr> <div class="t1">Alteração de Turmass </b><hr></div>
	<form Name="consultaturmas" method="Post" action="alterarturma.php?Funcao=pesquisar">
					
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
	<form Name="alterar" method="POST" action ="alterarturma.php?Funcao=altera&codturma=<?php echo $Res['codturma'];?>">
			<br>	
			
				<label for="Nome">Código:</label>				
				<?php Echo $Res['codturma'];?>
				
			</br>
			
			
			<br>	
			
				<label for="Nome">Nome:</label>				
				<input type="text" name="nome" id="nome" value="<?php Echo $Res['Nome'];?>">  
				
			</br>
			
			<br>	
			
				<label for="Nome">Curso:</label>				
				<input type="text" name="curso" id="curso" value="<?php Echo $Res['Curso'];?>"> 
				
			</br>
			
			
			
			<br>	
			
				<label for="Nome">Ano:</label>				
				<input type="text" name="ano" id="ano" value="<?php Echo $Res['Ano'];?>">
				
			</br>			
				
			<br>
			<fieldset>
				<label for="Nome">Periodo</label>	
				
			</br>
			
			<br>
			
				<label for="Name"> Turno: </label>   
			
			<select name="turno" id="Turno" value="<?php Echo $Res['Turno'];?>">
									
									<option value="Manha">Manhã</option>
									<option value="Tarde">Tarde</option>
									<option value="Noite">Noite</option>
									
									</select>
				
			</br>
			
			<br>
				<input name="Ok" type="submit"  value="Ok">	
		<?php }} ?>				
			</br>			
		<center><a href = "Administrativo.php">Voltar A Pagina Principal</a>
	</body>
	</form>
</html>