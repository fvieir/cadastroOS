<?php
require_once"config.php";

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
            <a class="navbar-brand" href="#">V&S</a>
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
                                    </span>Ordem de Servico
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
            
            <?php 

                      $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

                      if ($id) {
                
                          $sql = "SELECT *,
                          CASE 
                            WHEN ESTADO = 1 THEN 'MG' 
                            WHEN ESTADO = 2 THEN 'SP' 
                          END EST,
                          CASE 
                            WHEN CIDADE = 1 THEN 'PARA DE MINAS'
                            WHEN CIDADE = 2 THEN 'BELO HORIZONTE'
                            WHEN CIDADE = 3 THEN 'SANTOS'
                          END CID
                          FROM ordemservico
                          WHERE CODOR = {$id}";
                          $resultado = mysqli_query($conexao,$sql);

                          if (mysqli_num_rows($resultado) > 0) {

                            $result = mysqli_fetch_assoc($resultado);
                            
                          } 
                      }
                     ?>
            <!-- Inicio cadastrar usuarios-->
            <div class="content p-1 w-100">
                <div class="list-group-item">
                    <div class="d-flex">
                            <div class="mr-auto p-2 mb-1">
                                <h2 class="display-4 titulo "> Ordem de Serviço</h2>
                            </div>
                        <!-- Botão cadastrar usuario -->
                        <div class="p-2">
                            <span class="d-md-none d-sm-none d-lg-block" >
                              <a href="listar_os.php" class="btn btn-sm btn-outline-info">Listar
                              </a>
                              <a href="editar_os.php?id=<?php echo $id ?>" class="btn btn-sm btn-outline-warning">Editar
                              </a>
                              <a href="#" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#apagarModal">Apagar</a>
                            </span>
                                  <!-- Botão Dropdown do menu para tablet e smartphone -->
                            <div class="dropdown d-lg-none d-xl-none">
                              <button class="btn btn-outline-primary dropdown-toggle" type="button" id="acoesMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Ações
                              </button>
                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesMenu">
                                    <a class="dropdown-item" href="listar_usuarios.html">Listar</a>
                                    <a class="dropdown-item" href="editar_os.php?id=<?php echo $id ?>">Editar</a>
                                    <a class="dropdown-item" href="apagar.html" data-toggle="modal" data-target="#apagarModal" >Apagar</a>
                              </div>
                            </div><!-- Fim do botão Dropdown -->
                        </div>
                    </div><hr>

                    <!-- Visualização de usuario -->
                    <dl class="row">
                      <dt class="col-sm-3">Codigo da O.S.</dt>
                      <dd class="col-sm-9"><?php echo $result['CODOR'] ?></dd>

                       <dt class="col-sm-3 text-truncate">Descrição</dt>
                      <dd class="col-sm-9"><?php echo $result['TAG'] ?></dd>

                      <dt class="col-sm-3">Responsável</dt>
                      <dd class="col-sm-9"><?php echo $result['RESP'] ?></dd>

                      <dt class="col-sm-3">Tipo de Manutenção</dt>
                      <dd class="col-sm-9"><?php echo $result['TIPMAN'] ?></dd>

                       <dt class="col-sm-3">Setor executante</dt>
                      <dd class="col-sm-9"><?php echo $result['SETEXE'] ?></dd>

                      <dt class="col-sm-3 text-truncate">Aplicação</dt>
                      <dd class="col-sm-9"><?php echo $result['APLIC'] ?></dd>

                      <dt class="col-sm-3 text-truncate">Estado</dt>
                      <dd class="col-sm-9"><?php echo $result['EST'] ?></dd>

                      <dt class="col-sm-3 text-truncate">Cidade</dt>
                      <dd class="col-sm-9"><?php echo $result['CID'] ?></dd>

                      <dt class="col-sm-3 text-truncate">Empresa</dt>
                      <dd class="col-sm-9"><?php echo $result['EMPRESA'] ?></dd>

                      <dt class="col-sm-3 text-truncate">Filial</dt>
                      <dd class="col-sm-9"><?php echo $result['FILIAL'] ?></dd>

                      <dt class="col-sm-3 text-truncate">Serviço Solicitado</dt>
                      <dd class="col-sm-9"><?php echo $result['REGSERV'] ?></dd>

                    </dl><!-- Termino da visualização de usuario -->
                </div>
            </div>    
        </div> 
        
         <!-- Modal, apagar usuarios -->
        <div class="modal fade" id="apagarModal" tabindex="-1" role="dialog" aria-labelledby="apagarModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header bg-danger">
                <h5 class="modal-title text-white" id="apagarModalLabel">Exlcuir usuario</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Tem certeza que deseja exlcuir o usuario selecionado?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger">Apagar</button>
              </div>
            </div>
          </div>
        </div>
        
          <!-- Modal, apagar usuarios -->
        <div class="modal fade" id="apagarModal" tabindex="-1" role="dialog" aria-labelledby="apagarModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header bg-danger">
                <h5 class="modal-title text-white" id="apagarModalLabel">Exlcuir usuario</h5>
                <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Tem certeza que deseja exlcuir o usuario selecionado?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-danger">Apagar</button>
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
