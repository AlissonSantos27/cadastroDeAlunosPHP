<?php
session_start();
include('conexaoLogin.php');
include_once("conexaoLogin.php");

$nome = $_POST['nome'];
$nascimento = $_POST['nascimento'];
$ano = $_POST['ano'];
$turma = $_POST['turma'];
$turno = $_POST['turno'];
$telefone = $_POST['telefone'];

if ($_POST['enviar']) {
    $sql = "SELECT nome, nascimento, ano FROM cadastro_alunos WHERE nome = '$nome' AND nascimento = '$nascimento' AND ano = '$ano';";
    $consulta = mysqli_query($conexao, $sql);
    $registros = mysqli_num_rows($consulta);
    if ($registros > 0) {
        echo " <h2>Não foi possível cadastrar o aluno pois o mesmo já está cadastrado no sistema.</h2>";
        echo "<p><a href='cadastroAluno.php'>Voltar para a pagina de cadastro.</a></p>";
    } else {
        $sql = "insert into cadastro_alunos (nome,nascimento,ano,turma,turno,telefone) values ('$nome','$nascimento','$ano','$turma', '$turno', '$telefone')";
        $salvar = mysqli_query($conexao, $sql);
        $linhas = mysqli_affected_rows($conexao);
        mysqli_close($conexao);
        echo "<h2>Aluno cadastrado com sucesso!</h2>";
        echo "<p><a href='cadastroAluno.php'>Voltar</a></p>";
    }
}
