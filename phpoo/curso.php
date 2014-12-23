<?php
require_once ('Aprendices.php');
class Curso
{
	//definiendo un arreglo donde se van a guardar los aprendices
	private $aprendices = array();
	
	function agregarAprendices(Aprendices $aprendiz)
	{
		//se agrega al arreglo $aprendices el objeto aprendiz
		$this->aprendices[] = $aprendiz;
	}
}

$objCurso = new Curso();
$objCurso->agregarAprendices(new Aprendices());
$objCurso->agregarAprendices(new Aprendices());
$objCurso->agregarAprendices(new Aprendices());
$objCurso->agregarAprendices(new Aprendices());
$objCurso->agregarAprendices(new Aprendices());
/*Como ejemplo en el curso anterior solo se agregaron 
5 aprendices */
?>


