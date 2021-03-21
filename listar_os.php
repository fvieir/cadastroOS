<?php
session_start();
require_once"config.php";

if (!isset($_SESSION['usuario']) && !isset($_SESSION['senha'])) {
   echo  ("<script>
        window.alert('Pagina não encontrada')
        window.location.href='index.php';
    </script>");
    exit;
}

?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="imagens/logo.png">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
        <link rel="stylesheet" href="css/listar_usuario.css">
        <link href="/open-iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
        <!-- Font Awesome CSS-->
        <link rel="stylesheet" href="css/fontawesome.min.css">
        <!-- Font awesome JS-->
        <script defer src="js/fontawesome.min.js"></script>

        <title>V&S</title>
    </head>
    <body>
        <!-- Inicio do Navbar e menu -->
        <nav class="navbar navbar-expand navbar-dark bg-primary">
            <a class="sidebar-toogle text-light mr-3 icone">
                <span class="navbar-toggler-icon"></span>
            </a>
            <a class="navbar-brand" href="index.html">V&S</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle menu" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="imagens/logo.png" class="rounded-circle" height="30" width="30" style="margin-right: 10px;"><span class="d-none d-md-inline">Usuário</span>  
                        </a>
                        <div class="dropdown-menu  dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">
                                <span class="pers-icone">
                                    <i class="fas fa-user-circle"></i>
                                </span>Perfil
                            </a>
                            <a class="dropdown-item" href="logout.php">
                                 <span class="pers-icone">
                                    <i class="fas fa-sign-out-alt"></i>
                                </span>Sair
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav><!-- Termino do Navbar -->
        
        <div class="d-flex">
            <!-- Inicio do menu lateral -->
            <nav class="sidebar"> 
                <ul class="list-unstyled">
                    <li>
                        <a href="dashboard.php">
                            <!-- Adicionar icone Font awesome-->
                            <span class="pers-icone">
                                <i class="fas fa-tachometer-alt"></i>
                            </span>Dashbord
                        </a>
                    </li>
                    <li>
                        <a href="#submenu1" data-toggle="collapse">
                            <span class="pers-icone">
                                <i class="fas fa-user-circle"></i>
                            </span>Cadastro
                        </a>
                        <ul class="list-unstyled collapse" id="submenu1">
                            <li>
                                <a href="cadastro.php" class="padding-esquerda">
                                    <span class="pers-icone">
                                        <i class="fas fa-users"></i>
                                    </span>Ordem de Serviço
                                </a>
                            </li>
                            <li>
                                <a href="#" class="padding-esquerda">
                                    <span class="pers-icone">
                                        <i class="fas fa-key"></i>
                                    </span>Aplicação
                                </a>
                            </li>
                        </ul>
                    </li>
                   
                    <li><a href="#">item</a></li>
                    <li>
                        <a href="logout.php">
                            <span class="pers-icone">
                                <i class="fas fa-sign-out-alt"></i>
                            </span>Sair   
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- Fim do menu lateral -->
            
            <!-- Inicio da DIV conteudo do listar usuarios -->
            <div class="content p-1 w-100">
                <div class="list-group-item">
                    <div class="d-flex">
                        <div class="mr-auto p-2 mb-1">
                            <h2 class="display-4 titulo "> Listar O.S.</h2>
                        </div>
                        <!-- Botão cadastrar usuario -->
                        <a href="cadastro.php">
                            <div class="p-2">
                                <button class="btn  btn-outline-success btn-sm">
                                    Cadastrar
                                </button>
                            </div>
                        </a>
                    </div><hr>
                     <!-- Alerta de usuario excluido -->
                    <!---<div class="alert alert-success alert-dismissible fade show" role="alert">
                      Usuario exlcuido com sucesso!
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div> -->

                    <?php 

                    if (isset($_SESSION['msg'])) {
                      echo $_SESSION['msg'];
                      unset($_SESSION['msg']);
                    }

                      $sql = "SELECT * FROM ordemservico ORDER BY CODOR DESC";
                      $resultado = mysqli_query($conexao, $sql);
                      ?>
                        <!-- Inicio da table de listar usuarios -->
                          <div class="table-responsive">
                              <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                          <tr>
                                            <th>Código</th>
                                            <th>Responsavel</th>
                                            <th class="d-none d-sm-table-cell">Aplicação</th>
                                            <th class="d-none d-lg-table-cell d-xl-table-cell">Setor executante</th>
                                            <th class="text-center">Ações</th>    
                                        </tr>
                                    </thead>
                                    <tbody>
                                          <tr>
                      <?php
                      foreach ($resultado as $result) {
                          
                                      echo"<th>".$result['CODOR']."</th>";
                                      echo"<td>".$result['RESP']."</td>";
                                      echo"<td class='d-none d-sm-table-cell'>".$result['APLIC']."</td>";
                                      echo"<td class='d-none d-lg-table-cell d-xl-table-cell'>".$result['SETEXE']."</td>";

                                      echo"<td class='text-center'>"
                                          ."<span class='d-md-none d-sm-none d-lg-block'>"
                                          ."    <a href='visualizar_os.php?id={$result['CODOR']}' class='btn btn-sm btn-outline-primary'>Visualizar"
                                              ."</a>"
                                              ."<a href='editar_os.php?id={$result['CODOR']}' class='btn btn-sm btn-outline-warning'>Editar"
                                              ."</a>"
                                              ."<a href='validaDelete.php?id={$result['CODOR']}' class='btn btn-sm btn-outline-danger'>Apagar</a>
                                          </span>"
                                         ."<!-- Botão Dropdown do menu para tablet e smartphone -->"
                                          ."<div class='dropdown d-lg-none d-xl-none'>"
                                                  ."<button class='btn btn-outline-primary dropdown-toggle' type='button' id='acoesMenu' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>"
                                                    ."Ações"
                                                  ."</button>"
                                              ."<div class='dropdown-menu dropdown-menu-right' aria-labelledby='acoesMenu'>"
                                                    ."<a class='dropdown-item' href='visualizar_os.php'>Visualizar</a>"
                                                    ."<a class='dropdown-item' href='editar_usuario.html'>Editar</a>"
                                                    ."<a class='dropdown-item' href='apagar.html' data-toggle='modal' data-target='#apagarModal' >Apagar</a>"
                                              ."</div>"
                                            ."</div>"
                                        ."</td>"
                                    ."</tr>";
                                      }
                                      ?>
                              </tbody>
                        </table>
                    </div>    
                </div>    
            </div>
        </div> 
        
        <!-- Modal, apagar usuarios -->
        <div class="modal fade" id="#apagarModal" tabindex="-1" role="dialog" aria-labelledby="apagarModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header bg-danger">
                <h5 class="modal-title text-white" id="apagarModalLabel">Exlcuir O.S.</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Tem certeza que deseja exlcuir a O.S. selecionada ?
              </div>
              <div class="modal-footer">
                <button type="submit" class="btn btn-success" data-dismiss="modal">Cancelar</button>
               <button type="button" class="btn btn-danger" >Apagar</button> 
              </div>
            </div>
          </div>
        </div>
        <!-- Fim da modal apagar usuarios -->
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="js/dashboard.js"></script>
    </body>
</html>

