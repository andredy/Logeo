<?php
include "conexion.php";
$nombre=$_POST["Nombre"];
$apellidos=$_POST["App"];
$Num_Con=$_POST["NC"];
$Edad=$_POST["Edad"];
$sql="UPDATE estudiantes SET Nombre= '$nombre', Apellidos='$apellidos', Edad='$Edad'  WHERE NumeroControl=$Num_Con";
$res=mysql_query($sql,$conexion);
if($res){
    echo 'los datos fueron actualizados satisfactoriamente: ';
    echo '  Nombre: '.$nombre.'  Apellidos: '.$apellidos.'  Numero De Control: '.$Num_Con.' Edad: '.$Edad;
}else{
    echo "Se produjo un  horror al momeneto de  actualizar los datos".  mysql_error();
}
mysql_close();
?>