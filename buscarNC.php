<?php
include "conexion.php";
$nc=$_POST["NC"];

$sql="SELECT *FROM estudiantes Where NumeroControl='$nc'";
$res=mysql_query($sql,$conexion);
$datos=array();
if($res){
$i=0;
	while($fila=mysql_fetch_assoc($res)){
		$datos[$i]=$fila;
		$i=$i+1;
	}
}else{
	echo "Error al ejecutar la cosulta: ".mysql_error();
}
mysql_close($conexion);
echo json_encode($datos);
?>
