<?php

include 'funcoes/Funcoes.php';
include 'Classes/Mensagem.php';

//criando_loop();


$msg = new Mensagem();

//$msg->texto = 'yurim@gsdfcom';

//$msg->imprimir();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div>
    <form action="POST">
      <label>Input de nome </label>
      <input type="text" name="Nome"></input>
      <br>
      <label>Insira a Senha </label>
      <input type="password" name="Senha"></input>
      <br>
      <button type="submit">Enviar</button>
    </form>
  </div>


</body>

</html>