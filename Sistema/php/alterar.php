<?php
	include("../inc/conexao2.php");
		 if ($_GET['Funcao'] == "altera"){
			$SQLalterar ="UPDATE `bd_form`.`cadastro` SET `Nome` = '".$_POST['Nome']."',`Endereco`='".$_POST['Endereco']."',`Bairro`='".$_POST['Bairro']."',`CEP`='".$_POST['CEP']."',`Cidade`='".$_POST['Cidade']."',`Estado`='".$_POST['Estado']."' WHERE  `cadastro`.`Codigo`='".$_GET['Codigo']. "';";
			mysql_query($SQLalterar);
			echo "<script>alert('Os dados foram alterado com sucesso');</script>";
		}
?>


<html>	
	<head>
		<title>Alterar</title>
			</head>
				<body>
					<form Name="alterar" method="Post" action="alterar.php?Funcao=pesquisar">
					<table border="1">
						<tr>
							<td>Nome:</td>
							<td><input type ="Text" ID="nome" Name="Nome" size="25"></td>
						</tr>
							<tr>
								<td><input type="submit" Name="OK" VALUE="OK"></td>
								</tr>
					</table>
				
					</form>
						<?php
					 if($_GET['Funcao']=="pesquisar"){
			             $SQLpesquisar="SELECT * FROM `cadastro` WHERE `Nome` LIKE '%".$_POST['Nome']."%';";
				         $Total=mysql_query($SQLpesquisar);
						 while ($Res=mysql_fetch_array($Total))
					 {
					 
					 
					?>
					<form Name="alterar" method="POST" action ="alterar.php?Funcao=altera&Codigo=<?php echo $Res['Codigo'];?>">	
					<table border ="6" CELLSPACING=3 CELLPADDING=3 BGCOLOR="#E1FFD9" BORDERCOLOR="red"><h1 align ="center"></h1>
						
						
						
						
						
						<tr>
						<td> Nome </td>
						<td> <input type = "text" name= "Nome" ID="Nome" size= "50"  value="<?php echo $Res['Nome'];?>" ></td>	
						</tr>
						
							<tr>
						
							<td>Endereco</td>
						<td> <input type = "text" name= "Endereco" ID="Endereco" size= "50" value="<?php echo $Res['Endereco'];?>"></td>
						
							</tr>
						
						<tr>
						<td> Bairro </td>
						<td><input type = "text" name = "Bairro" ID = "Bairro" size= "50" value="<?php echo $Res['Bairro'];?>"></td>
						</tr>
				
						<tr>
						<td> CEP </td>
						<td><input type = "text" name = "CEP" ID = "CEP" size= "50" value="<?php echo $Res['CEP'];?>"></td>
						</tr>
				
					<tr>
					<td> Cidade </td>
					<td><input type = "text" name = "Cidade" ID = "Cidade" size= "50" value="<?php echo $Res['Cidade'];?>"></td>
					</tr>	
				
					<tr>
					<td> Estado </td>
					<td>
					<select name = "Estado" ID = " Estado" value="<?php echo $Res['Estado']; ?>" >
					<option value = "AC" > AC </option>
					<option value = "AL" > AL </option>
					<option value = "AM" > AM </option>
					<option value = "BA" > BA </option>
					<option value = "CE" > CE </option>
					<option value = "DF" > DF </option>
					<option value = "ES" > ES </option>
					<option value = "GO" > GO </option>
					<option value = "MA" > MA </option>
					<option value = "MG" > MG </option>
					<option value = "MT" > MT </option>
					<option value = "MS" > MS </option>
					<option value = "PA" > PA </option>
					<option value = "PB" > PB </option>
					<option value = "PE" > PE </option>
					<option value = "PI" > PI </option>
					<option value = "PR" > PR </option>
					<option value = "RJ" > RJ </option>
					<option value = "RN" > RN </option>
					<option value = "RO" > RO </option>
					<option value = "RR" > RR </option>
					<option value = "RS" > RS </option>
					<option value = "SC" > SC </option>
					<option value = "SE" > SE </option>
					<option value = "SP" > SP </option>
					<option value = "TO" > TO </option>
					</tr>
					</td>
					<tr>
					<td><input type="submit" Name="Alterar" VALUE="Alterar"></td>
					</tr>					
					</table>
					
					
						
						<?php }} ?>  
				</body>
</html>						
			