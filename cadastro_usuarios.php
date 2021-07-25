<?php
session_start();
include("conexaoLogin.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>

<body>
    <h2>Cadastro de Usuário</h2>
    <form action="processa_usuarios.php" method="POST">
        Nome:<br>
        <input type="text" name="nome" class="campo" maxlength="40" required autofocus><br>
        Email:<br>
        <input type="email" name="email" class="campo" maxlength="50" required><br>
        Cargo:<br>
        <input type="text" name="profissao" class="campo" maxlength="40" required><br>
        Telefone:<br>
        <input type="text" name="telefone" class="campo" maxlength="11" required><br>
        Login:<br>
        <input type="text" name="login" class="campo" maxlength="40" required><br>
        Senha:<br>
        <input type="password" name="senha" class="campo" maxlength="12" required><br>
        <input type="submit" value="Enter" name= "enviar">
    </form>
    <br>
    <p><a href="index.php">Voltar para a página inicial</a></p>
</body>

</html>