<h1>Editar cursos</h1>
<?php
	$sql = "SELECT * FROM curso WHERE idcurso=".$_REQUEST['idcurso'];
	$res = $conn->query($sql);
	$row = $res->fetch_object();
?>
<form action="?page=curso-salvar" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="idcurso" value="<?php print $row->idcurso; ?>">
	<div class="mb-3">
		<label>Curso</label>
		<input type="text" name="nome_curso" value="<?php print $row->nome_curso; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>