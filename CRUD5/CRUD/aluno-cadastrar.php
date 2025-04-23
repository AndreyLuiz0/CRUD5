<h1>cadastra aluno</h1>
<div class="mb-3">
		<label>Nome</label>
		<input type="text" name="nome" class="form-control">
	</div>
	<div class="mb-3">
		<label>Endereço</label>
		<input type="text" name="endereço" class="form-control">
	</div>
<form action="?page=aluno-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Curso</label>
		<select name="curso_idcurso" class="form-control">
			<option>- Escolha -</option>
			<?php
				$sql = "SELECT * FROM curso";
				$res = $conn->query($sql);
				if($res->num_rows > 0){
					while($row = $res->fetch_object()){
						print "<option value='".$row->idcurso."'>".$row->nome_curso."</option>";
					}
				}else{
					print "<option>Não há cursos cadastrados</option>";
				}
			?>
		</select>
	</div>
<form action="?page=aluno-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Disciplina</label>
		<select name="sala_idsala" class="form-control">
			<option>- Escolha -</option>
			<?php
				$sql = "SELECT * FROM disciplina";
				$res = $conn->query($sql);
				if($res->num_rows > 0){
					while($row = $res->fetch_object()){
						print "<option value='".$row->iddisciplina."'>".$row->nome_disciplina."</option>";
					}
				}else{
					print "<option>Não há marcas cadastradas</option>";
				}
			?>
		</select>
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>