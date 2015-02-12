<?php
include "C:/xampp\htdocs\icesi\appNotas/includes/coneccion.php";
$query = "SELECT * FROM cursos ORDER BY idCurso ASC";
$resultQuery = mysqli_query($con,$query);
$res=[];
while ($row = mysqli_fetch_array($resultQuery)) {  
	array_push($res,[utf8_encode($row['idCurso']),utf8_encode($row['nombre_curso'])]);
	//echo $row['idCurso']."'>".$row['nombre_curso'] ."</option>";

}
$respuesta = json_encode($res);
echo $respuesta;
?>