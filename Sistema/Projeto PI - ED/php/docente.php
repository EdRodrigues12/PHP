<html>
	<head>
		<title>Docente</title>
			<link rel="stylesheet"  type="text/css"  href="..\css\doc.css">
				<script type = "text/javascript" src="../js/jquery-1.10.2.min.js"></script>
		 <script type = "text/javascript">
		 $(document).ready(function() {
		 $("#menu_topo li ul").hide();
		 $("#menu_topo li").hover(
		 function(){$(this).children("ul").show();},
		 function(){$(this).children("ul").hide();}
		 );
		 });
		 </script>

 
	</head>

<body>
<nav>
	<div id="titulo">  </div>

		<ul class="menu_topo">
			<li><a href="#">Lan�ar</a> 
				<ul>
					<li><a href="lancamencoes.php?Funcao=">Men��o Parcial</a></li>
					<li><a href="lancamencaodefin.php?Funcao=">Men��o Definitiva</a></li>
					<li><a href="chamada.html">Presen�a De Alunos</a></li> 
					<li><a href="Anota��es.html">Anota��es</a></li> 
				</ul>
			</li>
			
			<li><a href="#">Consultar Dados</a> 
				<ul>
					<li><a href="lancamencoes.php?Funcao=">Men��o Parcial</a></li>
					<li><a href="lancamencadefin.php?Funcao=">Men��o Definitiva</a></li>
					<li><a href="#">Presen�a De Alunos</a></li> 
					<li><a href="#">Anota��es</a></li> 
				</ul>
			</li>
			
			<li><a href="#">Enviar Dados</a> 
				<ul>
					<li><a href="#">Men��es</a></li>
					<li><a href="#">Presen�a De Alunos</a></li> 
				</ul>
			</li>
			
					<li><a href="sobredoc.php">Sobre</a></li>
					
					<li><a href="Login.php">Sair</a></li>
	</ul>


</nav>
</body>

</html>