<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    include('verificaLogin.php');
    ?>
    <h2>Olá, <?php echo $_SESSION['nome_usuario']; ?>!</h2>
    <p><a href="cadastroAluno.php">Cadastrar aluno</a></p>
    <p><a href="consulta.php">Tabela de alunos cadastrados</a></p>
    <form action="consulta_nome.php" method="$_GET">
        Buscar aluno por nome:<br>
        <input type="search" name="busca" required>
        <input type="submit" value="buscar" name="enviar">
    </form>
    <br>
    <form action="consulta_ano.php" method="$_GET">
        Buscar aluno por ano:<br>
        <input type="search" name="busca" required>
        <input type="submit" value="buscar">
    </form>
    <br>
    <p><a href="logout.php">Sair do sistema</a></p>

</body>

</html>