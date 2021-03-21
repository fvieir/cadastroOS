<?php
session_start();
require_once"config.php";

if (!isset($_SESSION['usuario']) && !isset($_SESSION['senha']) ) {
    exit;

}

$sendCadastro = filter_input(INPUT_POST, 'sendCadastro', FILTER_SANITIZE_STRING);

if ($sendCadastro) {
   
    $codigo = filter_input(INPUT_POST, 'codigo', FILTER_SANITIZE_NUMBER_INT);
    $tag = filter_input(INPUT_POST, 'tag', FILTER_SANITIZE_STRING);
    $tipman = filter_input(INPUT_POST, 'tipman', FILTER_SANITIZE_STRING);
    $setexe = filter_input(INPUT_POST, 'setexe', FILTER_SANITIZE_STRING);
    $resp = filter_input(INPUT_POST, 'resp', FILTER_SANITIZE_STRING);
    $aplic = filter_input(INPUT_POST, 'aplic', FILTER_SANITIZE_STRING);
    $estado = filter_input(INPUT_POST, 'estado', FILTER_SANITIZE_STRING);
    $cidade = filter_input(INPUT_POST, 'cidade', FILTER_SANITIZE_STRING);
    $empresa = filter_input(INPUT_POST, 'empresa', FILTER_SANITIZE_STRING);
    $filial = filter_input(INPUT_POST, 'filial', FILTER_SANITIZE_STRING);
    $regserv = filter_input(INPUT_POST, 'regserv', FILTER_SANITIZE_STRING);


    $sql = "UPDATE ordemservico SET TAG = '".$tag."', TIPMAN ='".$tipman."', SETEXE = '".$setexe."', 
            RESP ='".$resp."', APLIC = '".$aplic."', ESTADO ='".$estado."', CIDADE ='".$cidade."',
            EMPRESA = '".$empresa."', FILIAL ='".$filial."', REGSERV ='".$regserv."' WHERE CODOR =".$codigo; 
    //echo $sql;

    if (mysqli_query($conexao, $sql)) {

       echo ("<script>
            window.alert('Dados atualizados com sucesso')
            window.location.href='listar_os.php';
        </script>");

    } else {
        echo  ("<script>
            window.alert('Houve algum erro')
            window.location.href='editar_os.php?id=$codigo';
        </script>");
    }
   

} else {
     $_SESSION['msg'] = "<div class='alert alert-danger'>Página não encontrada!</div>";
     header("location: cadastro.php");
}

?>

