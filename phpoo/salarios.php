<?php
include ('Empleado.php');
include "Contratista.php";
include "Planta.php";

echo "Calcular Salario Empleado";
echo "<br>";
$tipoEmpleado = "Contratista";
$identificacion="123";
$nombre="Angie Cepeda";
$cargo = "Secretaria";
$totalHorasTrabajadas = 160;

$objContratista = new Contratista($identificacion,$nombre,$cargo);

$objContratista->setvalorHora(4000);
$objContratista->setTotalHoras($totalHorasTrabajadas);

$objContratista->calcularSalario(4000,$totalHorasTrabajadas);

echo "<br>id Empleado: " . $objContratista->getIdentificacion();
echo "<br>Nombree Empleado: " . $objContratista->getNombre();
echo "<br>Cargo Empleado: " . $objContratista->getCargo();
echo "<br>Salario del  Empleado: " . $objContratista->getSalario();

?>


