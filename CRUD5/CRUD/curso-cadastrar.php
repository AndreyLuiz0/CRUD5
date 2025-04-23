<h1> cadastrar curso</h1>
<form action="?page=curso-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Curso</label>
		<input type="text" name="nome_curso" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>