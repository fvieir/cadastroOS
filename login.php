<?php
session_start();
require_once"config.php";

// Verifica se clicou no botão de enviar, senão clicar entra no else e é redirecionado
$sendLogin = filter_input(INPUT_POST, 'sendLogin', FILTER_SANITIZE_STRING);

echo $sendLogin;

if ($sendLogin) {

	$usuario_rc = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
	$usuario = str_ireplace(" ", "", $usuario_rc);
	$senha_rc = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
	$senha = str_ireplace(" ", "", $senha_rc);

	$sql = "SELECT * FROM login WHERE USUARIO = '$usuario' AND SENHA = '$senha'";
	$resultado = mysqli_query($conexao,$sql);

	if(mysqli_num_rows($resultado) > 0){

		$_SESSION['usuario'] = $usuario;
		$_SESSION['senha'] = $senha;
		header("Location: cadastro.php");
		
	} else {
		unset($_SESSION['usuario']);
		unset($_SESSION['senha']);
		echo  ("<script>
        window.alert('Usuário ou senha não cadastros')
        window.location.href='index.php';
    </script>");

	}

} else {
  echo  ("<script>
        window.alert('Pagina não encontrada')
        window.location.href='index.php';
    </script>");
}

?>



