
<!DOCTYPE html>
<html>
 <head>
        <title>Login</title>
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/estilo.css" rel="stylesheet">
    </head>

<body class="text-center">
	<div class="container">
		<div class="row">
			<div class="col">
			    <form class="form-signin" method="POST" action="login.php">
			        <h1 class="h3 mb-3 font-weight-normal">Area Restrita</h1>
			        <div class="form-group">
			            <label>Usuário</label>
			            <input type="text" name="usuario" class="form-control" placeholder="Digite seu usuário" >
			        </div>
			        <div class="form-group">
			            <label>Senha</label>
			            <input type="password" name="senha" class="form-control" placeholder="Digite sua senha" >
			        </div>
			        <input type="submit" name="sendLogin" class="btn btn-lg btn-primary btn-block" style="margin-bottom: 20px;" value="Acessar">
			    </form>
			</div>
	    </div>
	 </div>
</body>

</html>



