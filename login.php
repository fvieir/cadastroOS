<?php
require_once"config.php";

// Verifica se clicou no botão de enviar, senão clicar entra no else e é redirecionado
$sendLogin = filter_input(INPUT_POST, 'sendLogin', FILTER_SANITIZE_STRING);


if ($sendLogin) {

	$usuario_rc = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
	$usuario = str_ireplace(" ", "", $usuario_rc);
	$senha_rc = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
	$senha = str_ireplace(" ", "", $senha_rc);

	if ($usuario && $senha) {
		
		$sql = "SELECT * FROM login";
		$resultado = mysqli_query($conexao, $sql);
		
		if($resultado && $resultado->num_rows != 0){

			$result = mysqli_fetch_assoc($resultado);
			if ($result['USUARIO'] == $usuario && $result['SENHA'] == $senha) {
				header("Location: dashboard.php");
			} else {
				header("Location: index.php");
			}

		}

	} else {

		header("Location: index.php");

	}

	
} else {

	header("Location: index.php");
}

?>

