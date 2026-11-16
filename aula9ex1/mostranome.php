<?php
session_start();        
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "site";
$conexao = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);

    $nome = $_SESSION['nome'];
    if($nome){
        echo $nome . " online";
    }else{
        echo "<a href='envia.php'></a>";
    }

?>