<?php
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$sql = "INSERT INTO aluno (
						idaluno,
						nome,
						endereço,
						curso_idcurso,
						disciplina_iddisciplina
					)VALUES(
						".$_POST["idaluno"].",
						'".$_POST["curso_idcurso"]."',
						'".$_POST["disciplina_iddisciplina"]."',
						'".$_POST["nome"]."',
						'".$_POST["endereço"]."'
					)";

			$res = $conn->query($sql);

			if($res==true){
				print "<script>alert('Cadastrou com sucesso!');</script>";
				print "<script>location.href='?page=aluno-listar';</script>";
			}else{
				print "<script>alert('Não foi possível!');</script>";
				print "<script>location.href='?page=aluno-listar';</script>";
			}
			break;
		
		case 'editar':
			$sql = "UPDATE aluno SET
						
						curso_idcurso='".$_POST['curso_idcurso']."',
						disciplina_iddisciplina='".$_POST['disciplina_iddisciplina']."',
						nome='".$_POST['nome']."',
						endereço='".$_POST['endereço']."'
					WHERE
						idaluno=".$_POST['idaluno'];

			$res = $conn->query($sql);

			if($res==true){
				print "<script>alert('Editou com sucesso!');</script>";
				print "<script>location.href='?page=aluno-listar';</script>";
			}else{
				print "<script>alert('Não foi possível!');</script>";
				print "<script>location.href='?page=aluno-listar';</script>";
			}
			break;

		case 'excluir':
			$sql = "DELETE FROM aluno WHERE idaluno=".$_REQUEST['idaluno'];

			$res = $conn->query($sql);

			if($res==true){
				print "<script>alert('Excluiu com sucesso!');</script>";
				print "<script>location.href='?page=aluno-listar';</script>";
			}else{
				print "<script>alert('Não foi possível!');</script>";
				print "<script>location.href='?page=aluno-listar';</script>";
			}
			break;
	}