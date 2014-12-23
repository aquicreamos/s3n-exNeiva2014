<?php
class Persona
{
	//Definición de Atributos	
	protected $nombre;		
				
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
	
	public function leer($libro)
	{
		//aquí el código del método
	}
	
}
?>

