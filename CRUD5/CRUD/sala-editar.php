<h1>editar Laboratorio/Sala</h1>
<?php
	$sql = "SELECT * FROM sala WHERE idsala=".$_REQUEST['idsala'];
	$res = $conn->query($sql);
	$row = $res->fetch_object();
?>
<form action="?page=sala-salvar" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="idsala" value="<?php print $row->idsala; ?>">
	<div class="mb-3">
		<label>Numero Sala</label>
		<input type="text" name="numero_sala" value="<?php print $row->numero_sala; ?>" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>