<?php

/**
 * @author Yuri <yurimello29@gmail.com>
 */

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

    echo '<hr>' . 'atributo publico é um email? :';
    $this->filtrar_email();

  }


  private function filtrar_email()
  {
    #FILTER_VALIDATE_EMAIL para validar email
    if (filter_var($this->texto, FILTER_VALIDATE_EMAIL)) {
      echo "Email válido";
    } else {
      echo "Email não válido";
    }

  }
}

//inserido no vscode pow 

?>