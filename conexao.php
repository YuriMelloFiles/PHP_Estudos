<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "db_ph";

$conexao = new mysqli($host, $user, $password, $db);


if ($conexao->connect_error) {
  echo 'nao foi possivel ' . $conexao->connect_error;
}
?>