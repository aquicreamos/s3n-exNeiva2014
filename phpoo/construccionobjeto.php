<?php 
//incluimos el archivo donde esta el código de la clase Persona
include "Persona.php"; 
//Instanciamos el primer Objeto
$objPersona=new Persona("Pedro, Picapiedra"); //instanciamos

/* Para poder mostrar en pantalla el nombre de la persona debemos utilizar 
el método getNombre(),ya que el atributo $nombre es privado.*/

echo "<br> Nombre del Primer objeto Persona : ". $objPersona->getNombre() . " ". $objPersona-> getApellido();

//Ahora instanaciamos otra vez la clase persona
$objPersona=new Persona("Vilma");
echo "<br> Nombre del segundo objeto Persona : ". $objPersona->getNombre();
?>