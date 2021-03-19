<?php
session_start();
require_once"config.php";

unset($_SESSION['usuario']);
unset($_SESSION['senha']);
//header("Location: index.php");

echo ("<script>
        window.alert('Volte logo, já estou com saudades :-)')
        window.location.href='index.php';
    </script>");

?>



