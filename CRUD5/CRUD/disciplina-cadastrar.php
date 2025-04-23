<h1>Cadstrar Disciplina</h1>
	<form action="?page=disciplina-salvar" method="POST">
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
					print "<option>Não há marcas cadastradas</option>";
				}
			?>
		</select>
	</div>
	<div class="mb-3">
		<label>Nome Disciplina</label>
		<input type="text" name="nome_disciplina" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>