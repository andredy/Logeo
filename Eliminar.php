<?php
include "conexion.php";
$Num_Con=$_POST["NC"];
$sql="DELETE FROM estudiantes  WHERE NumeroControl=$Num_Con";
$res=mysql_query($sql,$conexion);
if($res){
    echo 'los datos fueron eliminados satisfactoriamente: ';
    
}else{
    echo "Se produjo un  horror al momeneto de  eliminar los datos".  mysql_error();
}
mysql_close();
?>