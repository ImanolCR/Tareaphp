<?php
require_once("banco.php");
//clase Transferencia
class Transferencia extends Banco
{
  public function transferirDinero($cantidad, $clave, $destino)
  {
    if ($clave === 'clave_segura') {
      if ($cantidad <= $this->fondos) {
        $this->fondos -= $cantidad;
        $destino->depositarDinero($cantidad);
        echo "Transferencia exitosa de $cantidad a la cuenta destino. <br>";
        echo "Fondos restantes: $this->fondos";
      } else {
        echo "Fondos insuficientes";
      }
    } else {
      echo "Clave incorrecta. Transferencia denegada.";
    }
  }
}
?>