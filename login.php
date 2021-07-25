<?php
session_start();
include('conexaoLogin.php');

if (empty($_POST['nome_usuario']) || empty($_POST['senha_usuario'])) {
    header('Location: index.php');
    exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['nome_usuario']);
$senha = mysqli_real_escape_string($conexao, $_POST['senha_usuario']);

$querry = "select id_usuario, nome_usuario from login where login_usuario = '$usuario' and senha_usuario = ('$senha')";

$result = mysqli_query($conexao, $querry);

$row = mysqli_num_rows($result);

if ($row == 1) {
    $_SESSION['nome_usuario'] = $usuario;
    header("Location: logado.php");
    exit();
}else{
    header("Location: index.php");
    exit();
}