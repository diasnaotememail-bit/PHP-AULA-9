<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "site";

$conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

$n = $_GET['nome'];
$e = $_GET['email'];
$s = $_GET['senha'];

$comando = "INSERT INTO `dados` (`id`, `nome`, `email`, `senha`) VALUES (NULL, '$n', '$e', '$s')";

$linhas = $conexao->exec($comando);
if($linhas == 1) {
    echo "Dados salvos!";
} else {
    echo "Erro ao salvar dados!";
}

$conexao = null;

?>