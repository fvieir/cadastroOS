<?php

$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "projetoUm";


$conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);

if(!$conexao) {
	die("Falha ao conectar".mysqli_error());
}


