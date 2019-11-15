<?php
$usuario="root";
$password=""; 
$servidor="localhost";
$basededatos="prueba4";
$conexion= mysqli_connect($servidor,$usuario,"") or die ("Error con el servidor de la base de datos");
$bd= mysqli_select_db($conexion,$basededatos) or die ("Error conexion al conectarse a la base de datos");
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];
$sql="INSERT INTO datos4 VALUES('$name','$email','$phone', '$message')";
$ejecutar=mysqli_query($conexion, $sql);
if(!$ejecutar){
    
    echo "Hubo un error";
    
} else{
    
    echo "Datos Guardados correctamente";
    
}
?>
