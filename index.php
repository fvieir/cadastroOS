<!doctype html>
<html lang="pt-br">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
        <link rel="stylesheet" href="css/signin.css">
        <title>Fvieira</title>
    </head>
<body class="text-center">
    <form class="form-signin" method="POST" action="login.php">
        <img class="mb-4" src="imagens/logo.png" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Area Restrita</h1>
       
        <div class="form-group">
            <label>Usuário</label>
            <input type="text" name="usuario" class="form-control" placeholder="Digite seu usuário" required >
        </div>
        <div class="form-group">
            <label>Senha</label>
            <input type="password" name="senha" class="form-control" placeholder="Digite sua senha" required >
        </div>
        <input type="submit" name="sendLogin" class="btn btn-lg btn-primary btn-block" style="margin-bottom: 20px;" value="Acessar">
       
    </form>

</body>




</html>