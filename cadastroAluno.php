<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de alunos</title>
</head>

<body>
    <?php
        session_start();
        include('verificaLogin.php');
    ?>
    <h2>Cadastro de Alunos</h2>
    <form action="processa_alunos.php" method="POST">
        Nome:<br>
        <input type="text" name="nome" class="campo" maxlength="40" required autofocus><br>
        Data de nascimento:<br>
        <input type="date" name="nascimento" class="campo" maxlength="50" required><br>
        Ano:<br>
        <input list="ano" required name="ano"/>
        <datalist id="ano">
            <option value="1° Ano">
            <option value="2° Ano">
            <option value="3° Ano">
            <option value="4° Ano">
            <option value="5° Ano">
            <option value="6° Ano">
            <option value="7° Ano">
            <option value="8° Ano">
            <option value="9° Ano">
            <option value="EJAEM">
        </datalist>
        <br>
        Turma:<br>
        <input list="turma" required name="turma"/>
        <datalist id="turma">
            <option value="A">
            <option value="B">
            <option value="C">
        </datalist>
        <br>
        Turno:<br>
        <input list="turno" required name="turno"/>
        <datalist id="turno">
            <option value="Matutino">
            <option value="Vespertino">
            <option value="Noturno">
        </datalist>
        <br>
        Telefone:<br>
        <input type="tel" name="telefone" class="campo" maxlength="11" required><br><br>
        <input type="submit" value="Enter" name="enviar"><br>
        <p><a href="logado.php">Voltar para a página principal</a></p>
    </form>
</body>

</html>