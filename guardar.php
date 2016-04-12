<?php

include "conexion.php";

$nombre=$_POST["nomb"];
$apellidos=$_POST["apps"];
$Numero_Control=$_POST["numC"];
$Edad=$_POST["Ed"];

$sql="INSERT INTO Estudiantes (Nombre, Apellidos, NumeroControl, Edad)VALUES('$nombre','$apellidos','$Numero_Control','$Edad')";
$res=mysql_query($sql,$conexion);

if($res){
	echo "Los datos fueron registrados satifactoriamente: ";
	echo " Nombre: ".$nombre." Apellidos: ".$apellidos." Num_control: ".$Numero_Control. "Edad: ".$Edad;

}else{
	echo "Se produjo un error en ele momento de resgistrar los datos:".mysql_error();

}
mysql_close($conexion);
?>
