<?php
require_once("banco.php");
//clase retiro
class Retiro extends Banco
{
  public function sacarDinero($cantidad, $clave)
  {
    if ($clave === 'clave_segura') {
      if ($cantidad <= $this->fondos) {
        $this->fondos -= $cantidad;
        echo "Retiro exitoso. Cantidad retirada: $$cantidad <br>";
        echo "Fondos restantes: $$this->fondos";
      } else {
        echo "Fondos insuficientes";
      }
    } else {
      echo "Clave incorrecta. Retiro denegado.";
    }
  }
}
?>