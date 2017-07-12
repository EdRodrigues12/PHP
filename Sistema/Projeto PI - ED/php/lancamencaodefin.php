<?php
	include("../inc/conexao.php");
		 if ($_GET['Funcao'] == "lancar"){
		 	$SQLalterar ="INSERT INTO `bdcadastroetec`.`tbmencaodefinitiva` ( `Nome`, `Turma`, `Turno`, `Disciplina`,`Mencaodefin`) VALUES (  '".$_POST['Nome']."', '".$_POST['Turma']."', '".$_POST['Turno']."', '".$_POST['Disciplinas']."', '".$_POST['mencao']."');";
			mysql_query($SQLalterar);
			echo "<script>alert('Os dados foram alterado com sucesso');</script>";
			echo($SQLalterar);
			
			
		}
?>
<html>
<head>
	<title>Lançar Mençoes Definitiva</title>
	<link rel= "stylesheet" type="text/css" href="../css/style.css">
		
</head>
<body>
<form Name="lancamencoes" method="Post" action="lancamencaodefin.php?Funcao=pesquisar">
	<fieldset>
		<br>
		
   
			<label for="logon">Turma:</label>
					
			<input type = "text" name = "Turma" ID = "Turma" >
			
		<br>
		<br>
		
			<label for="Turno"> Turno</label> 
			
			<select name="Turno" id="Turno">
									<option value="Manha">Manhã</option>
									<option value="Tarde">Tarde</option>
									<option value="Noite">Noite</option>
									
									</select>
					
		<br>
		<br>
					
					
					<input type="submit" Name="OK" VALUE="OK"></td>
	</Fieldset>		
</form>	
			<?php
				include("../inc/conexao.php");
					if($_GET['Funcao']=="pesquisar"){
					$Turno=($_POST ['Turno']);
						$SQLpesquisar="SELECT * FROM  `tbalunos` WHERE `Turma` = '" . $_POST['Turma'] . "' AND `Turno`='" . $Turno . "'  ;";
							$Total=mysql_query($SQLpesquisar);
								while ($Res=mysql_fetch_array($Total)){
								
								
									?>
	
					
					<form Name="lancamencoes" method="POST" action ="lancamencaodefin.php?Funcao=lancar">
								
						
					<fieldset>	
						
						<br>
						<br>
						
						 <label for="logon">Nome:</label>
						<input type="text" id="logon" name="Nome" value="<?php Echo $Res['Nome'];?>" >
						
						
							<br>
							<br>
						
						<label for="logon">Turma:</label>
						<input type="text" id="logon" name="Turma" value="<?php echo $Res['Turma'];?>">
						
						
							
						<br>
						<br>
						
						<label for="logon">Turno:</label>
						<input type="text" id="logon" name="Turno" value="<?php echo $Res['Turno'];?>">
						
						<br>
						<br>						
						
						
				
			
				
			
					<label for="Name"> Selecionar Menção : </label>
		
					<select name = "mencao" ID = " mencao"  >
					<option value = "MB" > MB </option>
					<option value = "B" > B </option>
					<option value = "R" > R </option>
					<option value = "I" > I </option>
					</select>
						
					
	            <br>
				<br>
				<label for="logon">Disciplina:</label>
			<input type="text" id="logon" name="Disciplinas" >
			<br />
			<br />
				
				</fieldset>
				<?php }} ?>  
				<Input type="submit" name="OK"  VALUE="OK" >
				
				<Input type="Reset" name="Cancelar" ID="Cancelar" VALUE="Cancelar">
				<br>
				<br>
				<center><a href = "docente.php">Voltar A Pagina Anterior</a>
				
</body>
	</form>
</html>