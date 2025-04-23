<h1>Cadastrar professores</h1>
<form action="?page=professor-salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="mb-3">
		<label>Disciplina</label>
		<select name="disciplina_iddisciplina" class="form-control">
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
		<label>Nome pprofessor</label>
		<input type="text" name="nome_professor" class="form-control">
	</div>
	<div class="mb-3">
		<label>Data de Nascimento</label>
		<input type="date" name="data_nas_prof" class="form-control">
	</div>
	<div class="mb-3">
		<button type="submit" class="btn btn-success">Enviar</button>
	</div>
</form>