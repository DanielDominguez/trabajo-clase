<?php
include "C:/xampp\htdocs\icesi\appNotas/includes/coneccion.php";


$idcurso = $_POST["curso"];

$query = "SELECT idusuario.idUsuario,idusuario.nombre FROM idusuario WHERE idUsuario=$idcurso";
$resultQuery = mysqli_query($con,$query);
$res=[];
while ($row = mysqli_fetch_array($resultQuery)) {  
	array_push($res,[utf8_encode($row['idUsuario']),utf8_encode($row['nombre'])]);
	//echo $row['idCurso']."'>".$row['nombre_curso'] ."</option>";

}
$respuesta = json_encode($res);
echo $respuesta;
?>