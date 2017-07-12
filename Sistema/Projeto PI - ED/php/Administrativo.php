<html>
	<head>
		<title>Administrativo</title>
			<link rel="stylesheet"  type="text/css"  href="..\css\adm.css">
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
		
			
			<li><a href="#">Cadastro</a> 
				<ul>				
					<li><a href="cadastrodealuno.php?Funcao="> Aluno</a></li>					
					<li><a href="cadastrocurso.php?Funcao="> Curso</a></li>
					<li><a href="cadastrodisciplina.php?Funcao="> Disciplina</a></li>
					<li><a href="cadastroprofessores.php?Funcao="> Professores</a></li> 
					<li><a href="Cadastroresponsaveis.php?Funcao="> Responsáveis</a></li> 
					<li><a href="registroturma.php?Funcao="> Turmas</a></li> 
					<li><a href="cadastrofuncionarios.php?Funcao=">Funcionarios</a></li> 
					<li><a href="#">Unidades</a></li> 
				</ul>			
			</li>			
			
					<li><a href="#">Alunos</a> 
						<ul>
							<li><a href="#">Menções</a></li>
							<li><a href="#">Presença De Alunos</a></li> 
							<li><a href="#">Dispensa De Aluno</a></li>
						</ul>
					</li>	
					
					<li><a href="#">Consultar Dados</a> 
						<ul>				
							<li><a href="consultaaluno.php?Funcao="> Aluno</a></li>					
							<li><a href="Consultacurso.php?Funcao="> Cursos</a></li>
							<li><a href="Consultadisciplina.php?Funcao="> Disciplinas</a></li>
							<li><a href="consultaprofessores.php?Funcao=">Professores</a></li>
							<li><a href="consultaresponsaveis.php?Funcao=">Responsáveis</a></li>
							<li><a href="Consultaturma.php?Funcao="> Turmas</a></li> 
							<li><a href="Consultafuncionarios.php?Funcao="> Funcionarios</a></li> 
							<li><a href="#">Lançamento de notas</a></li> 
							<li><a href="#">Frequencia</a></li> 
						</ul>			
					</li>	

					<li><a href="#">Alterar</a> 
						<ul>				
							<li><a href="alteraraluno.php?Funcao=">Alunos</a></li>					
							<li><a href="alterarcurso.php?Funcao=">Cursos</a></li>
							<li><a href="alterardisciplinas.php?Funcao=">Disciplinas</a></li>
							<li><a href="alterarprofessores.php?Funcao=">Professores</a></li>
							<li><a href="alterarturma.php?Funcao=">Turmas</a></li> 
							<li><a href="alterarfuncionario.php?Funcao=">Funcionários</a></li> 
							
						</ul>			
					</li>

					<li><a href="#">Excluir</a> 
						<ul>				
							<li><a href="deletaraluno.php?Funcao=">Alunos</a></li>					
							<li><a href="deletarcurso.php?Funcao=">Cursos</a></li>
							<li><a href="deletardisciplinas.php?Funcao=">Disciplinas</a></li>
							<li><a href="deletarprofessores.php?Funcao=">Professores</a></li>
							<li><a href="deletarfuncionarios.php?Funcao=">Funcionários</a></li> 
							
						</ul>			
					</li>					
					
					
							
							
					<li><a href="sobreAdm.php?Funcao=">Sobre</a></li>
					
					<li><a href="Login.php">Sair</a></li>
					
					
					
	</ul>
		
</nav>


</body>

</html>