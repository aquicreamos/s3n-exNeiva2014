<?php
class Persona
{
	//Definición de Atributos	
	private $identificacion;
	private	$nombre;	
	private $fechanacimiento;
	private $correo;
	private $genero;	
				
	//Constructor			
	public function Persona($nombre)
	{		
		$this->nombre=$nombre; 
	}
	
	//Definición de Métodos
	
	public function getNombre()
	{
		return $this->nombre;
	}
	
	public function setNombre($value)
	{
		$this->nombre=$value;
	}
	
	public function getIdentificacion()
	{
		return $this->identificacion;
	}
	
	public function setIdentificacion($value)
	{
		$this->nombre=$value;
	}
	
	public function getFechaNacimiento()
	{
		return $this->fechaNacimiento;
	}
	
	public function setFechaNacimiento($value)
	{
		$this->fechaNacimiento=$value;
	}
	
	public function leer($libro)
	{
		//aquí el código del método
	}
	
}
?>

