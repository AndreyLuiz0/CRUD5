
<?php
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$sql = "INSERT INTO professor (	
						disciplina_iddisciplina,
						nome_professor,
						data_nas_prof
					)VALUES(
						".$_POST["disciplina_iddisciplina"].",
						'".$_POST["nome_professor"]."',
						'".$_POST["data_nas_prof"]."''
					)";
			$res = $conn->query($sql);

	}
