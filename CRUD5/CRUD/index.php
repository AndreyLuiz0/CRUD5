<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Faculdade</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg bg-body-tertiary">
	  <div class="container-fluid">
	    <a class="navbar-brand" href="#"></a>
	    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	      <span class="navbar-toggler-icon"></span>
	    </button>
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	        <li class="nav-item">
	          <a class="nav-link active" aria-current="page" href="index.php">FACULDADE</a>
	        </li>
	       
	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Curso
	          </a>
	          <ul class="dropdown-menu">
	            <li><a class="dropdown-item" href="?page=curso-listar">Listar</a></li>
	            <li><a class="dropdown-item" href="?page=curso-cadastrar">Cadastrar</a></li></li>
	          </ul>
	        </li>
	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Disciplina
	          </a>
	          <ul class="dropdown-menu">
	            <li><a class="dropdown-item" href="?page=disciplina-listar">Listar</a></li>
	            <li><a class="dropdown-item" href="?page=disciplina-cadastrar">Cadastrar</a></li></li>
	          </ul>
	        </li>
	          <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Professor
	          </a>
	          <ul class="dropdown-menu">
	            <li><a class="dropdown-item" href="?page=professor-listar">Listar</a></li>
	            <li><a class="dropdown-item" href="?page=professor-cadastrar">Cadastrar</a></li></li>
	          </ul>
	        </li>
	          <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Alunos
	          </a>
	          <ul class="dropdown-menu">
	            <li><a class="dropdown-item" href="?page=aluno-listar">Listar</a></li>
	            <li><a class="dropdown-item" href="?page=aluno-cadastrar">Cadastrar</a></li></li>
	          </ul>
	        </li>
	        <li class="nav-item dropdown">
	          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
	            Laboratorios/Salas
	          </a>
	          <ul class="dropdown-menu">
	            <li><a class="dropdown-item" href="?page=sala-listar">Listar</a></li>
	            <li><a class="dropdown-item" href="?page=sala-cadastrar">Cadastrar</a></li></li>
	          </ul>
	        
	      </ul>
	    </div>
	  </div>
	</nav>
	<div class="container mt-3">
		<div class="row">
			<div class="col">
				<?php
					//conexão com o banco de dados
					include('config.php');

					//includes das páginas
					switch (@$_REQUEST['page']) {
						//curso
						case 'curso-listar':
							include('curso-listar.php');
							break;
						case 'curso-cadastrar':
							include('curso-cadastrar.php');
							break;
						case 'curso-editar':
							include('curso-editar.php');
							break;
						case 'curso-salvar':
							include('curso-salvar.php');
							break;

						//disciplina
						case 'disciplina-listar':
							include('disciplina-listar.php');
							break;
						case 'disciplina-cadastrar':
							include('disciplina-cadastrar.php');
							break;
						case 'disciplina-editar':
							include('disciplina-editar.php');
							break;
						case 'disciplina-salvar':
							include('disciplina-salvar.php');
							break;
						//professor
							case 'professor-listar':
							include('professor-listar.php');
							break;
						case 'professor-cadastrar':
							include('professor-cadastrar.php');
							break;
						case 'professor-editar':
							include('professor-editar.php');
							break;
						case 'professor-salvar':
							include('professor-salvar.php');
							break;
							//aluno
							case 'aluno-listar':
							include('aluno-listar.php');
							break;
						case 'aluno-cadastrar':
							include('aluno-cadastrar.php');
							break;
						case 'aluno-editar':
							include('aluno-editar.php');
							break;
						case 'aluno-salvar':
							include('aluno-salvar.php');
							break;
						//sala
							case 'sala-listar':
							include('sala-listar.php');
							break;
						case 'sala-cadastrar':
							include('sala-cadastrar.php');
							break;
						case 'sala-editar':
							include('sala-editar.php');
							break;
						case 'sala-salvar':
							include('sala-salvar.php');
							break;
						default:
							print "<h1>Seja bem vindo ao cadastro, escolha uma das opções acima para realizar um novo cadastro</h1>";
					}
				?>
			</div>
		</div>
	</div>
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
