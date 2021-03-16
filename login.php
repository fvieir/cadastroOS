<?php
require_once"config.php";

// Verifica se clicou no botão de enviar, senão clicar entra no else e é redirecionado
$sendLogin = filter_input(INPUT_POST, 'sendLogin', FILTER_SANITIZE_STRING);

if($sendLogin){

// Recebe dados do formulário
// Função str_irreplace retira espaço em branco das variaveis recebidas 
$usuario_rc =  filter_input(INPUT_POST, 'login', FILTER_SANITIZE_STRING);
$usuario = str_ireplace(" ", "", $usuario);
$senha_rc =  filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
$senha = str_ireplace(" ", "", $senha);

	if (!empty($usuario) || !empty($senha)) {
		
		$sql = "SELECT * FROM login";
		$resultado = mysqli_query($conexao, $sql)


	} else {

		echo"Não cadastrado";
	}


} else {

	header("location index.php");
}

?>

