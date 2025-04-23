<h1>Editar Aluno</h1>
<?php
	$sql = "SELECT * FROM aluno WHERE idaluno=".$_REQUEST['idaluno'];
	$res = $conn->query($sql);
	$row = $res->fetch_object();
?>
<form action="?page=aluno-salvar" method="POST">
	<input type="hidden" name="acao" value="editar">
	<input type="hidden" name="idaluno" value="<?php print $row ->idaluno;?>">
	<div class="mb-3">
		<label>Nome Aluno</label>
		<input type="text" name="nome" value ="<?php print $row ->nome;?>" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>