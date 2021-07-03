<?php
require_once "conexion.php";
//hacemos la consulta en bd y la recorremos en la cilleteria
$query="SELECT * FROM puestos";
$resultado=mysqli_query($conexion,$query);
$resultado=mysqli_fetch_all($resultado,MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <link rel="stylesheet" href="">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script  src="ajax/jquery.js"></script>
  <link rel="stylesheet" href="css/style.css">
</head>

<body id="cargarPagina">

    <strong id="titulo">ESCENARIO</strong>
    <table class="table">

      <thead>
        <tr>
          <th scope="col"></th>
          <th scope="col">1</th>
          <th scope="col">2</th>
          <th scope="col">3</th>
          <th scope="col">4</th>
          <th scope="col">5</th>
      </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <?php for($i=0;$i<5;$i++){
     echo  "<td>".$resultado[$i]['estado']."</td>";
     } ?>
  </tr>
  <tr>
      <th scope="row">2</th>
       <?php for($i=5;$i<10;$i++){
     echo  "<td>".$resultado[$i]['estado']."</td>";
     } ?>
  </tr>
  <tr>
      <th scope="row">3</th>
       <?php for($i=10;$i<15;$i++){
     echo  "<td>".$resultado[$i]['estado']."</td>";
     } ?>
  </tr>
  <tr>
      <th scope="row">4</th>
       <?php for($i=15;$i<20;$i++){
     echo  "<td>".$resultado[$i]['estado']."</td>";
     } ?>
  </tr>
  <tr>
      <th scope="row">5</th>
      <?php for($i=20;$i<25;$i++){
     echo  "<td>".$resultado[$i]['estado']."</td>";
     } ?>
  </tr>
</tbody>
</table>
<br><br>
<form id="formulario">
<strong>Fila</strong> <input type="text" id="fila" name="fila"><br>
<strong>Puesto</strong><input type="text" id="puesto" name="puesto"><br>
<div id="radios">
  <input type="radio" name="opcion" id="" value="Comprar"> Comprar <br>
  <input type="radio" name="opcion" id="" value="Reservar">Reservar <br>
  <input  type="radio" name="opcion" id="" value="Liberar">Liberar<br>
</div>
<button id="enviar">Enviar</button><button id="borrar">Borrar</button>
</form>
<br><br>
<div id="errores">
    
</div>


<script src="ajax/ajax.js"></script>
</body>
</html>