<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php 

//incluimos el archivo donde esta el código de la clase Persona
include "Estudiante.php"; 
//Instanciamos para crear el primero objeto tipo Estudiante

$objEstudiante=new Estudiante("César Cuéllar", "ADSI");

//creamos otr objeto de tipo Estudiante
$objEstudiante2= new Estudiante("Marcela Méndez", "Multimedia");

echo "ESTUDIANTES INSCRITOS<BR>";

/*Vamos ahora a imprimir en pantalla los Datos de los Estudiantes
accedemos  al método getNombre() que lo hereda de la clase persona*/

echo "<br> Nombre del Estudiante : ". $objEstudiante->getNombre();

/*Ahora vamos a imprimir en pantalla el Curso, para ello
accedemos al método getCurso() propio de la clase Estudiante.*/

echo "<br> Curso que se encuentra realizando el Estudiante : ". $objEstudiante->getCurso();

echo "<br> Nombre del Estudiante : ". $objEstudiante2->getNombre();
echo "<br> Curso que se encuentra realizando el Estudiante : ". $objEstudiante2->getCurso();
?>


