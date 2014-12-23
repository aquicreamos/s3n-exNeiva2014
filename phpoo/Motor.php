<?php


/**
 * @author Administrador
 * @version 1.0
 * @created 22-oct-2013 05:48:08 p.m.
 */
class Motor
{

	private $Cilindraje;

	public function Motor()
	{
		$this->Cilindraje="1600 CC";
	}



	public function getCilindraje()
	{
		return $this->Cilindraje;
	}

}
?>