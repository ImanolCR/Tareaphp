<?php
require_once("banco.php");
echo "<b>Bienvenido al BANCO</b><br>";
$banco = new Banco();
$clave = 'clave_segura'; // La clave de seguridad
$cantidad_a_retirar_nina1 = 500; // Cantidad a retirar por la niña 1
$cantidad_a_retirar_nina2 = 300; // Cantidad a retirar por la niña 2
$cantidad_a_transferir = 400; // Cantidad a transferir entre las cuentas
 //obtener el saldo de la cuenta

 $saldo = $banco->getFondos();
 echo "El saldo inicial de la cuenta es de: $saldo<br>";
// Retiro de dinero por la niña 1
$banco = new Retiro();
$banco->sacarDinero($cantidad_a_retirar_nina1, $clave);
echo "<br><br>";
 
// Retiro de dinero por la niña 2
$banco->sacarDinero($cantidad_a_retirar_nina2, $clave);
echo "<br><br>";
 
// Transferencia de dinero entre cuentas de las niñas
$nina1_banco = new Transferencia(); // Simulamos otro banco para la cuenta de la niña 1
$nina2_banco = new Transferencia(); // Simulamos otro banco para la cuenta de la niña 2
$nina1_banco->transferirDinero($cantidad_a_transferir, $clave, $nina2_banco);
?>