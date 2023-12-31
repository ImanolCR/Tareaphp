<?php
require_once("transferencia.php");
require_once("retiro.php");
class Banco
{
  protected $fondos;
  public function __construct($fondos = 2000)
  {
    $this->fondos = $fondos;
  }
  public function getFondos()
  {
    return $this->fondos;
  }
  public function depositarDinero($cantidad)
  {
    $this->fondos += $cantidad;
  }
}
?>