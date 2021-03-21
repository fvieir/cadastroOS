<?php
session_start();
require_once"config.php";

if (!isset($_SESSION['usuario']) && !isset($_SESSION['senha']) ) {
    exit;

}

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

if (!empty($id)) {

    $sql = "DELETE FROM ordemservico WHERE CODOR =".$id;
    $resultado = mysqli_query($conexao,$sql);
   
   // Verificar se alguma linha foi afetada na conexão 
    if (mysqli_affected_rows($conexao)) {
        echo $_SESSION['msg'] = "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                      Exlcuído com sucesso!
                      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                      </button>
                    </div>";
        header("location: listar_os.php"); 
    } else {
         echo $_SESSION['msg'] = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                      Página não encontrada!
                      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                      </button>
                    </div>";
     header("location: listar_os.php");
    }
  
} else {
     echo $_SESSION['msg'] = "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                      Página não encontrada!
                      <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                        <span aria-hidden='true'>&times;</span>
                      </button>
                    </div>";
     header("location: listar_os.php");
}


?>

