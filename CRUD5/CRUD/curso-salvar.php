<h1>salvar curso</h1>
<?php
	switch ($_REQUEST['acao']) {
		case 'cadastrar':
			$sql = "INSERT INTO  curso
						(nome_curso) 
					VALUES 
						('".$_POST['nome_curso']."')";

			$res = $conn->query($sql);

			if($res==true){
				print "<script>alert('Cadastrou com sucesso!');</script>";
				print "<script>location.href='?page=curso-listar';</script>";
			}else{
				print "<script>alert('Não foi possível!');</script>";
				print "<script>location.href='?page=curso-listar';</script>";
			}
			break;
		
		case 'editar':
			$sql = "UPDATE curso SET 
						nome_curso='".$_POST['nome_curso']."' 
					WHERE 
						idcurso=".$_POST["idcurso"];

			$res = $conn->query($sql);

			if($res==true){
				print "<script>alert('Editou com sucesso!');</script>";
				print "<script>location.href='?page=curso-listar';</script>";
			}else{
				print "<script>alert('Não foi possível!');</script>";
				print "<script>location.href='?page=curso-listar';</script>";
			}
			break;

		case 'excluir':
			$sql = "DELETE FROM curso WHERE idcurso=".$_REQUEST['idcurso'];

			$res = $conn->query($sql);

			if($res==true){
				print "<script>alert('Excluiu com sucesso!');</script>";
				print "<script>location.href='?page=curso-listar';</script>";
			}else{
				print "<script>alert('Não foi possível!');</script>";
				print "<script>location.href='?page=curso-listar';</script>";
			}
			break;
	}