<?php 
	include("../inc/conexao.php"); 		
	
	//if(!isset($_POST['txtusername'] )){
		if($_POST['txtusername'] != "" && $_POST['txtpassword'] !=""){
			$Senha = md5($_POST['txtpassword']);
			$StrAutentica = "SELECT * FROM `tbcadastrosenha` WHERE `Nome`='" . $_POST['txtusername'] . "' AND `Senha`='" . $Senha . "';";
			$SqlLogin = mysql_query($StrAutentica);
			$Cod = mysql_num_rows($SqlLogin);
			$Res = mysql_fetch_array($SqlLogin);
				
			if($Res['Nivel']==1){
				header("Location:Administrativo.php?funcao=0&nivel=" . $Res['Nivel'] . "");
			}
			if($Res['Nivel']==2){
				header("Location:docente.php?funcao=0&nivel=" . $Res['Nivel'] . "");
			}
			else{
				echo("<script> alert('Acesso Negado!') </script>");
			}
		}
	//}
?>


<html>
	<head>
		<title> Login </title>
			<link rel="stylesheet"  type="text/css"  href="..\css\estilo.css">
		<script>
		function validador(){
			if(document.getElementById("txtusername").value == ""){
					alert("O campo nome esta em branco");
				}	
			if(document.getElementById("txtpassword").value == ""){
					alert("O campo senha esta em branco");
				}
			}
		</script>
	</head>
	

	<body>
		<div id="container">
			<form name="Forme" method="POST">
				
				<div class= "meuestilo"><center><b> Faça o Login: </b></center></div>
				
				<label for="username">Usuário:</label>
				
				<input type="text" id="username" name="txtusername">
				
				<label for="password">Senha:</label>
				
				<input type="password" id="password" name="txtpassword">
				
					<br>
					<br>
					<br>
					<br>
						<center><input type="image"  src="../img/botao_login.png"  value="Login" onclick="validador()">
										
			</form>
		</div>
	</body>
</html>