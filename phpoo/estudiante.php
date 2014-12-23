<?php
include "Persona.php";  //la incluimos para poder acceder a ella
class Estudiante extends Persona
{
	//Atributo curso: Que curso estudia el Estudiante.
	private $curso;
	
	//Método que obtiene el curso que estudia el estudiante
	public function getCurso()
	{
		return $this->curso;
	}
	//Método que permite cambiar el curso del estudiante.
	public function setCurso($value)
	{
		$this->curso=$value;
	}
	//Constructor Clase Estudiante
	public function Estudiante($nombre, $curso)
	{
		/*como iniciamos el atributo nombre que lo hereda de la clase Persona
		para ello el atributo nombre debe ser declarado como protected.*/
		$this->nombre=$nombre;
		$this->curso=$curso;		
	}
	
}
?>



