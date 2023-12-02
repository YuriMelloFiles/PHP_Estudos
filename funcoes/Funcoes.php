<?php

//Testes switch e default
function bom_dia($hora)
{


  switch ($hora) {
    case $hora >= 0 and $hora <= 5:
      $saudação = 'boa madrugada';
      break;

    case $hora >= 5 and $hora <= 12:
      $saudação = 'bom dia';
      break;

    case $hora >= 12 and $hora <= 18:
      $saudação = 'boa tarde';
      break;
    default:
      $saudação = 'boa noite';

  }

  return $saudação;
}
//echo bom_dia();

//criando loop while for
function criando_loop()
{
  $cont = 0;
  while ($cont < 10) {

    echo $cont;

    $cont += 1;
    echo '<br>';

  }

  for ($cont = 20; $cont <= 30; $cont += 1) {


    if ($cont % 2 == 0) {
      echo $cont . ' Par';

    } else {
      echo $cont . ' Impar';
    }
    echo '<br>';

  }

}

//preg_match, preg_replace, preg_split
function expressoes_regulares()
{
  $padrao = "/\d+/"; // Procura por um ou mais dígitos.
  $string = "A idade é 25 e o preço é 12.99.";

  preg_match_all($padrao, $string, $correspondencias);

  print_r($correspondencias);
}
