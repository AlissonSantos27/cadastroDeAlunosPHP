<?php

session_start();
include_once("conexaoLogin.php");

$nome = $_POST['nome'];
$email = $_POST['email'];
$cargo = $_POST['profissao'];
$telefone = $_POST['telefone'];
$login = $_POST['login'];
$senha = $_POST['senha'];

if ($_POST['enviar']) {
    $sql = "SELECT login_usuario FROM login WHERE login_usuario = '$login';";
    $consulta = mysqli_query($conexao, $sql);
    $registros = mysqli_num_rows($consulta);
    if ($registros > 0) {
        echo " <h2>O login de usuário já está sendo usado. Tente novamente com outro login</h2>";
        echo "<p><a href='cadastro_usuarios.php'>Voltar para a pagina de cadastro.</a></p>";
    } else {
        $sql = "insert into login (nome_usuario,email_usuario,cargo_usuario,telefone_usuario,login_usuario, senha_usuario) values ('$nome','$email','$cargo','$telefone', '$login', '$senha')";
        $salvar = mysqli_query($conexao, $sql);
        $linhas = mysqli_affected_rows($conexao);
        mysqli_close($conexao);
        echo "<h2>Usuário cadastrado com sucesso!</h2>";
        echo "<p><a href='cadastro_usuarios.php'>Voltar para a página de cadastro</a></p>";
    }
}
