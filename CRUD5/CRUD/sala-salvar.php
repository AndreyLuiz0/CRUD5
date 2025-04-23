<h1>salvar laboratorio/sala</h1>
<?php
	switch ($_REQUEST['acao']) {
		case 'cadastrar':
			$sql = "INSERT INTO sala
						(numero_sala) 
					VALUES 
						('".$_POST['numero_sala']."')";

			$res = $conn->query($sql);

			if($res==true){
				print "<script>alert('Cadastrou com sucesso!');</script>";
				print "<script>location.href='?page=sala-listar';</script>";
			}else{
				print "<script>alert('Não foi possível!');</script>";
				print "<script>location.href='?page=sala-listar';</script>";
			}
			break;
		
		case 'editar':
			$sql = "UPDATE sala SET 
						numero_sala='".$_POST['numero_sala']."' 
					WHERE 
						idsala=".$_POST["idsala"];

			$res = $conn->query($sql);

			if($res==true){
				print "<script>alert('Editou com sucesso!');</script>";
				print "<script>location.href='?page=sala-listar';</script>";
			}else{
				print "<script>alert('Não foi possível!');</script>";
				print "<script>location.href='?page=sala-listar';</script>";
			}
			break;

		case 'excluir':
			$sql = "DELETE FROM sala WHERE idsala=".$_REQUEST['idsala'];

			$res = $conn->query($sql);

			if($res==true){
				print "<script>alert('Excluiu com sucesso!');</script>";
				print "<script>location.href='?page=sala-listar';</script>";
			}else{
				print "<script>alert('Não foi possível!');</script>";
				print "<script>location.href='?page=sala-listar';</script>";
			}
			break;
	}