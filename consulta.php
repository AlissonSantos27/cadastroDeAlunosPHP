<?php
session_start();
include('verificaLogin.php');
// Criando a tabela e cabeçalho
echo "<table border=1>";
echo "<tr>";
echo "<th>MATRICULA</th>";
echo "<th>NOME</th>";
echo "<th>DATA DE NASCIMENTO</th>";
echo "<th>ANO</th>";
echo "<th>TURMA</th>";
echo "<th>TURNO</th>";
echo "<th>TELEFONE</th>";
echo "<tr>";

//Conectando ao banco de dados:
$strcon = mysqli_connect('localhost', 'root', '1234', 'dbEscola') or die('Erro ao conectar banco de dados');
$sql = "SELECT * FROM cadastro_alunos";
$resultado = mysqli_query($strcon, $sql) or die("Erro ao tentar cadastrar registro");

//Obtendo os dados por meio de um loop while
while ($registro = mysqli_fetch_array($resultado)) {
    $id = $registro['id_aluno'];
    $nome = $registro['nome'];
    $nascimento = $registro['nascimento'];
    $ano = $registro['ano'];
    $turma = $registro['turma'];
    $turno = $registro['turno'];
    $telefone = $registro['telefone'];
    echo "<tr>";
    echo "<td>" . $id . "</td>";
    echo "<td>" . $nome . "</td>";
    echo "<td>" . $nascimento . "</td>";
    echo "<td>" . $ano . "</td>";
    echo "<td>" . $turma . "</td>";
    echo "<td>" . $turno . "</td>";
    echo "<td>" . $telefone . "</td>";
    echo "</tr>";
}
mysqli_close($strcon);
echo "</table>";

echo "<br><a href='logado.php'>Voltar a tela principal</a>";
