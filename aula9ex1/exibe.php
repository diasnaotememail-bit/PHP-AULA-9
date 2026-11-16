<?php
session_start();        
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "site";
$conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);


$n = $_GET['nome'];
$f = $_GET['email'];
$comando = "SELECT * FROM `usuarios` WHERE `nome` = '$n' AND `email` = '$f'";

$stm = $conexao->prepare($comando);
$stm->execute();

$usuario = $stm->fetch();

if($usuario){
    echo "Usuario existe! Bem vindo $n";
    $_SESSION['nome'] = $n;
}else{
    echo "Usuario não existe!";
}
echo "<br>".$comando;
?>