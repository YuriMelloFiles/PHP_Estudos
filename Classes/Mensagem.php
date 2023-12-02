<?php
//inserido no github
class Mensagem
{
  //atributo publico pode ser alterado fora da classe
  public $texto;
  private $var_privada = ' Privada';

  // tambem pode-se aplicar public para método

  public function imprimir()
  {
    //reutilizando atributos da classe com $this->
    echo 'Atributo público : ' . $this->texto . '<br>Atributo privado : ' . $this->var_privada;
  }

}



?>
