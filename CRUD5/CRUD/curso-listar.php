<h1>listar cursos</h1>
<?php
	$sql = "SELECT * FROM curso";
	$res = $conn->query($sql);
	$qtd = $res->num_rows;

	if($qtd > 0){
		print "<p>Encontrou <b>$qtd</b> resultado(s).</p>";
		print "<table class='table table-bordered table-striped table-hover'>";
		print "<tr>";
		print "<th>Cod.Curso</th>";
		print "<th>Nome do curso</th>";
		print "<th>Ações</th>";
		print "</tr>";
		while($row = $res->fetch_object()){
			print "<tr>";
			print "<td>".$row->idcurso."</td>";
			print "<td>".$row->nome_curso."</td>";
			print "<td>
					 <button onclick=\"location.href='?page=curso-editar&idcurso=".$row->idcurso."';\" class='btn btn-primary'>Editar</button>

					 <button onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=curso-salvar&acao=excluir&idcurso=".$row->idcurso."';}else{false;}\"  class='btn btn-danger'>Excluir</button>
			       </td>";
			print "</tr>";
		}
		print "</table>";
	}else{
		print "Não encontrou resultado";
	}