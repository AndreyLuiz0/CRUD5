<h1>Listar Alunos</h1>
<?php
	$sql = "SELECT * FROM aluno AS a
			INNER JOIN curso AS c
			INNER JOIN disciplina AS d
			ON a.aluno_idaluno = ma.idcurso";

	$res = $conn->query($sql);
	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s).</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th> Nº Matricula</th>";
		print "<th>Nome Aluno</th>";
		print "<th>Endereço</th>";
		print "<th>Curso</th>";
		print "<th>Disciplina</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->idaluno."</td>";
			print "<td>".$row->nome."</td>";
			print "<td>".$row->endereço."</td>";
			print "<td>".$row->curso_idcurso."</td>";
			print "<td>".$row->disciplina_iddiciplina."</td>";
			print "<td>
					 <button onclick=\"location.href='?page=aluno-editar&idaluno=".$row->idaluno."';\" class='btn btn-primary'>Editar</button>

					 <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=aluno-salvar&acao=excluir&idaluno=".$row->idaluno."';}else{false;}\"  class='btn btn-danger'>Excluir</button>
			       </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não encontrou resultado";
	}