<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "db_php";

$conexao = new mysqli($host, $user, $password, $db);


if ($conexao->connect_error) {
  echo 'Não foi possivel conectar : ' . $conexao->connect_error;
  exit();
}

$query = "SELECT * FROM usuarios WHERE nome = 'Bruno' LIMIT 1";

$conexao->query($query);

echo $conexao->affected_rows;


?>