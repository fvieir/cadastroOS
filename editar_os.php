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
                            <a class="dropdown-item" href="#">
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
                        <a href="index.html">
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
                            </span>Usuario
                        </a>
                        <ul class="list-unstyled collapse" id="submenu1">
                            <li>
                                <a href="listar_usuarios.html" class="padding-esquerda">
                                    <span class="pers-icone">
                                        <i class="fas fa-users"></i>
                                    </span>Usuarios
                                </a>
                            </li>
                            <li>
                                <a href="#" class="padding-esquerda">
                                    <span class="pers-icone">
                                        <i class="fas fa-key"></i>
                                    </span>Nivel de acesso
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#submenu2" data-toggle="collapse">
                            <span class="pers-icone">
                            <i class="fas fa-list"></i>
                            </span>Menu
                        </a>
                        <ul class="list-unstyled collapse" id="submenu2">
                            <li>
                                <a href="#" class="padding-esquerda">
                                    <span class="pers-icone">
                                       <i class="fas fa-file-alt"></i>
                                    </span> Páginas
                                </a>
                            </li>
                            <li>
                                <a href="#" class="padding-esquerda">
                                    <span class="pers-icone">
                                       <i class="fab fa-elementor"></i>
                                    </span>itens de menu
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <span class="pers-icone">
                                <i class="fas fa-stroopwafel"></i>
                            </span>item
                        </a>
                    </li>
                    <li><a href="#">item</a></li>
                    <li class="active"><a href="#">item</a></li>
                    <li><a href="#">item</a></li>
                    <li>
                        <a href="#">
                            <span class="pers-icone">
                                <i class="fas fa-sign-out-alt"></i>
                            </span>Sair   
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- Fim do menu lateral -->
            
            <!-- Inicio cadastrar usuarios-->
            <div class="content p-1 w-100">
                <div class="list-group-item">
                    <div class="d-flex">
                            <div class="mr-auto p-2 mb-1">
                                <h2 class="display-4 titulo "> Editar Usuario</h2>
                            </div>
                        <!-- Botão cadastrar usuario -->
                        <div class="p-2">
                            <span class="d-md-none d-sm-none d-lg-block" >
                              <a href="listar_usuarios.html" class="btn btn-sm btn-outline-info">Listar
                              </a>
                              <a href="visualizar_usuario.html" class="btn btn-sm btn-outline-primary">Visualizar
                              </a>
                              <a href="apagar.html" class="btn btn-sm btn-outline-danger" data-toggle="modal" data-target="#apagarModal">Apagar</a>
                            </span>
                                  <!-- Botão Dropdown do menu para tablet e smartphone -->
                            <div class="dropdown d-lg-none d-xl-none">
                              <button class="btn btn-outline-primary dropdown-toggle" type="button" id="acoesMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Ações
                              </button>
                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesMenu">
                                    <a class="dropdown-item" href="listar_usuarios.html">Listar</a>
                                    <a class="dropdown-item" href="visualizar_usuario.html">Visulizar</a>
                                    <a class="dropdown-item" href="apagar.html" data-toggle="modal" data-target="#apagarModal" >Apagar</a>
                              </div>
                            </div><!-- Fim do botão Dropdown -->
                            </div>
                    </div><hr>
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Nome</label>
                                <input name="nome" type="text" class="form-control" id="nome" placeholder="Nome compleo">
                            </div>
                            <div class="form-group col-md-6">
                                <label>E-mail</label>
                                <input name="email" type="email" class="form-control" id="email" placeholder="Digite seu e-mail">
                            </div>
                        </div>
                         <div class="form-row">
                            <div class="form-group col-md-6">
                                 <label>Senha</label>
                                <input name="senha" type="password" class="form-control" id="senha" placeholder="senha">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Confirmar senha</label>
                                <input name="confSenha" type="password" class="form-control" id="confSenha" placeholder="Confirmar senha">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                  <label>Endereço</label>
                                  <input name="endereco" type="text" class="form-control" id="endereco" placeholder="Rua, lagadouro...">
                            </div>
                            <div class="form-group col-md-2">
                                   <label>Numero</label>
                                   <input name="numero" type="text" class="form-control" id="numero" placeholder="123">
                            </div>
                            <div class="form-group col-md-4">
                                    <label>Complemento</label>
                                    <input name="completo" type="text" class="form-control" id="completo" placeholder="sala 1 , apto 3 ...">
                            </div>
                        </div>
                         <div class="form-row">
                            <div class="form-group col-md-6">
                                  <label>Estado</label>
                                  <select name="estado" id="estado" class="form-control">
                                    <option selected>Selecione</option>
                                    <option>...</option>
                                  </select>
                            </div>
                            <div class="form-group col-md-4">
                                   <label>Cidade</label>
                                   <select name="cidade" id="cidade" class="form-control">
                                    <option selected>Selecione</option>
                                    <option>...</option>
                                  </select>
                            </div>
                            <div class="form-group col-md-2">
                                    <label>CEP</label>
                                    <input name="cep" type="text" class="form-control" id="cep" placeholder="12345-678">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Observação</label>
                            <textarea name="observacao" type="text" rows="5" class="form-control" id="observacao" placeholder=""></textarea>
                        </div>
                        <button type="submit" class="btn btn-warning">Salvar</button>
                    </form>
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