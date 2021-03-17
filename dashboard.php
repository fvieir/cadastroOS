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
        <link rel="stylesheet" href="css/dashbord.css">
        <link href="/open-iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
        <!-- Font Awesome CSS-->
        <link rel="stylesheet" href="css/fontawesome.min.css">
        <!-- Font awesome JS-->
        <script defer src="js/fontawesome.min.js"></script>

        <title>V&S</title>
    </head>
    <body>
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
                            <a class="dropdown-item" href="index.php">
                                 <span class="pers-icone">
                                    <i class="fas fa-sign-out-alt"></i>
                                </span>Sair
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="d-flex">
            <nav class="sidebar"> 
                <ul class="list-unstyled">
                    <li>
                        <a href="#">
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
                            </span>Cadastros
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
                                    </span>Aplicações
                                </a>
                            </li>
                        </ul>
                    </li>
                   
                  
                    <li class="active"><a href="#">item</a></li>
                  
                    <li>
                        <a href="index.php">
                            <span class="pers-icone">
                                <i class="fas fa-sign-out-alt"></i>
                            </span>Sair   
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="content p-1 w-100">
                <div class="list-group-item">
                    <div class="d-flex">
                        <div class="mr-auto p-2 mb-1">
                            <h2 class="display-4 titulo "> Dashboard</h2>
                        </div>
                    </div> 
                    <div class="row mb-3">
                        <div class="col-lg-3 col-sm-6 mb-2">
                            <div class="card bg-success text-white">
                                <div class="card-body">
                                    <span>
                                        <i class="fas fa-users fa-3x"></i>
                                    </span>
                                    <h6 class="card-title">Total de O.S.</h6>
                                    <h2 class="lead">110</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 mb-2">
                            <div class="card bg-danger text-white">
                                <div class="card-body">
                                    <span>
                                         <i class="fas fa-file-alt fa-3x"></i>
                                    </span>
                                    <h6 class="card-title">Total de Solicitantes</h6>
                                    <h2 class="lead">67</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 mb-2">
                            <div class="card bg-warning text-white">
                                <div class="card-body">
                                    <span>
                                       <i class="fas fa-eye fa-3x"></i>
                                    </span>
                                    <h6 class="card-title">Total de aplicações</h6>
                                    <h2 class="lead">648</h2>
                                </div>
                            </div>
                        </div>
                       <!-- fim dos cartoes -->
                    </div>
                </div>    
            </div>
        </div>       
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <script src="js/dashboard.js"></script>
    </body>
</html>