<?php
require_once ('Motor.php');

class Carro
{

	function mostrarMotor(Motor $objetoMotor)
	{
		echo $objetoMotor->getCilindraje();
	}

}
?>



