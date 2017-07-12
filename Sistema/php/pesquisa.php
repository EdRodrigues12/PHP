<?php
	include("../inc/conexao2.php");
		 if ($_GET['Funcao'] == "deletar"){
			$SQLdeletar ="DELETE FROM `bd_form`.`cadastro` WHERE `Codigo` = '".$_GET['Codigo']."';";
			mysql_query($SQLdeletar);
			echo "<script>alert('O dado foi apagado com sucesso');</script>";
		
		}
?>


<html>	
	<head>
		<title>Pesquisa</title>
			</head>
				<body>
					<form Name="pesquisa" method="Post" action="pesquisa.php?Funcao=pesquisar">
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
						            while ($Res=mysql_fetch_array($Total)){
					?>
					<form Name = "apagar" method= "POST" action = "pesquisa.php?Funcao=deletar&Codigo=<?php echo $Res['Codigo'];?>">
					<table border ="6" CELLSPACING=3 CELLPADDING=3 BGCOLOR="#E1FFD9" bordercolor="red"><h1 align ="center"></h1>
					            
								
					
					
						<tr>
						<td>Nome</td>
						<td><?php Echo $Res['Nome'];?></td>
						</tr>
						
						
							<tr>
						
							<td>Endereco</td>
							<td><?php Echo $Res['Endereco'];?></td>      
						
							</tr>
						
					<tr>
					<td> Bairro </td>
					<td> <?php echo $Res['Bairro']; ?></td>
					</tr>
				
					<tr>
					<td> CEP </td>
					<td> <?php echo $Res['CEP']; ?></td>
					</tr>
				
					<tr>
					<td> Cidade </td>
					<td> <?php echo $Res['Cidade']; ?></td>
					</tr>	
				
					<tr>
					<td> Estado </td>
					<td> <?php echo $Res['Estado']; ?></td>
					</tr>	
				
				<tr>
				<td><input type="submit" Name="Deletar" VALUE="Deletar"></td>
				</tr>
					</table>
						 <?php }} ?>  
				</body>
</html>						
			