<?php

$usuario="root";
$password=""; 
$servidor="localhost";
$basededatos="prueba";

$conexion= mysqli_connect($servidor,$usuario,"") or die ("Error con el servidor de la base de datos");

$bd= mysqli_select_db($conexion,$basededatos) or die ("Error conexion al conectarse a la base de datos");

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];

$sql="INSERT INTO datos VALUES('$nombre','$apellido','$email')";

$ejecutar=mysqli_query($conexion, $sql);

if(!$ejecutar){
    
    echo "Hubo un error";
    
} else{
    
    echo "Datos Guardados correctamente";
    
}


?>
