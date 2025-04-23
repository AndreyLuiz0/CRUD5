
<?php
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$sql = "INSERT INTO disciplina (	
						curso_idcurso,
						nome_disciplina
					)VALUES(
						".$_POST["curso_idcurso"].",
						'".$_POST["nome_disciplina"]."'
					)";
			$res = $conn->query($sql);
			
}


