<h1>listar professores</h1>
<?php
	$sql = "SELECT * FROM professor AS mo
			INNER JOIN disciplina AS ma
			ON mo.disciplina_iddisciplina = ma.iddisciplina";

	$res = $conn->query($sql);
	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>#</th>";
		print "<th>disciplina</th>";
		print "<th>Nome</th>";
		print "<th>Data de Nascimento</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->idprofessor."</td>";
			print "<td>".$row->nome_disciplina."</td>";
			print "<td>".$row->nome_professor."</td>";
			print "<td>".$row->data_nascimento."</td>";
			print "<td>
					  <button onclick=\"location.href='?page=professor-editar&idaluno=".$row->idprofessor."';\" class='btn btn-primary'>Editar</button>

					  <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=professor-salvar&acao=excluir&idprofessor=".$row->idprofessor."';}else{false;}\"  class='btn btn-danger'>Excluir</button>
			       </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não encontrou resultado";
	}