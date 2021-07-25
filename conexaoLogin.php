<?php

$hostname ="localhost";
$user="root";
$password= "1234";
$database ="dbEscola";
$conexao = mysqli_connect($hostname,$user,$password,$database);
 if (!$conexao) {
 	print "falha na conexao com bando de dados";
 }
