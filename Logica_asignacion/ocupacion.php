<?php 
require_once "../conexion.php"; 
//aca se hace toda la logica de ocupacion de cilla
$fila=$_POST['fila'];
$columna=$_POST['puesto'];

//hacemos la consulta en bd y la recorremos en la cilleteria
$query="SELECT * FROM puestos WHERE fila='$fila' AND columna='$columna'";
$resultado=mysqli_query($conexion,$query);
$resultado=mysqli_fetch_all($resultado,MYSQLI_ASSOC);
$existe=count($resultado);
if($existe>0){
   $estado= $resultado[0]['estado'];
   if($estado=="v"){
     echo "no";
   }else{
    //aca vamos hacer la actualizacion debo modificar esta sentencia
    $query="UPDATE puestos SET estado='v' WHERE fila='$fila' AND columna='$columna'";
    $resultado=mysqli_query($conexion,$query);
    echo "si";
   }
}