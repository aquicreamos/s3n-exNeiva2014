<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
   <style type="text/css">


.container {
	
	margin: 0 auto 0 auto;
	width: 960px;

}

.inemail {
	margin-top: 5px;
}

   </style>
  </head>
  <body>



<?php
 //echo "informacion". "<br />";

$art =  $_GET['art']; 
$clav = $_GET['clav']; 

$total = $art - (($art * $clav)/100);


//echo $total; 
 ?>



<div class="row ">  
  <div class="col-md-12">
  <div class="container">
  <ul class="nav nav-pills">
  <li ><a href="ex1.php">Ejercicio 1</a></li>
  <li ><a href="ex2.php">Ejercicio 2</a></li>
  <li><a href="ex3.php">Ejercicio 3</a></li>
  <li><a href="ex4.php">Ejercicio 4</a></li>
  <li class="active"><a href="ex5.php">Ejercicio 5</a></li>
  </ul>
</div></div></div>

<div class="container">
<div class="row">
    <div class="col-md-12">
    <form class="form-horizontal" action="parametros5.php" method="GET">
  <fieldset>
    <legend>Ejercicio 5</legend>

     <div class="form-group">
      <label for="select" class="col-lg-2 control-label" >Articulos</label>
      <div class="col-lg-10">
        <select class="form-control" id="select" disabled>
          <option>1 Tablet</option>
          <option value="1200000">2 Todo en uno</option>
          <option value="300000">3 Parlantes</option>
          <option value="1800000">4 Portatil</option>
       </select>
      </div>
       <label for="select" class="col-lg-2 control-label">Claves</label>
      <div class="col-lg-10">
          <select class="form-control" id="select" disabled>
          <option value="660000">Clave 1 - 10% descuento</option>
          <option value="1200000">Clave 2 - 20% descuento</option>
     </select>
      </div>
    </div>
   <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
      <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>

  </fieldset>
</form>
</div>

<?php 
echo "<p style='text-align: center;'>";
echo "El Valor del articulo es " . $art . " y el descuento ". $clav ."%";
echo "<h2 style='text-align: center;'> Pagué:  $". $total. "</h2>";
?>
</div></div></div></body>

     

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>