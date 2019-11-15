<?php
$usuario="root";
$password=""; 
$servidor="localhost";
$basededatos="prueba3";
$conexion= mysqli_connect($servidor,$usuario,"") or die ("Error con el servidor de la base de datos");
$bd= mysqli_select_db($conexion,$basededatos) or die ("Error conexion al conectarse a la base de datos");
$b1=$_POST['b1'];
$b2=$_POST['b2'];
$b3=$_POST['b3'];
$b4=$_POST['b4'];
$b5=$_POST['b5'];
$b6=$_POST['b6'];
$b7=$_POST['b7'];
$b8=$_POST['b8'];
$b9=$_POST['b9'];
$b10=$_POST['b10'];
$b11=$_POST['b11'];
$b12=$_POST['b12'];
$b13=$_POST['b13'];
$b14=$_POST['b14'];
$b15=$_POST['b15'];
$b16=$_POST['b16'];
$b17=$_POST['b17'];
$b18=$_POST['b18'];
$b19=$_POST['b19'];
$b20=$_POST['b20'];
$b21=$_POST['b21'];
$b22=$_POST['b22'];
$b23=$_POST['b23'];
$b24=$_POST['b24'];
$b25=$_POST['b25'];
$b26=$_POST['b26'];
$b27=$_POST['b27'];
$b28=$_POST['b28'];
$b29=$_POST['b29'];
$sql="INSERT INTO datos3 VALUES('$b1','$b2','$b3','$b4','$b5','$b6','$b7','$b8','$b9','$b10','$b11','$b12','$b13','$b14','$b15','$b16','$b17','$b18','$b19','$b20','$b21','$b22','$b23','$b24','$b25','$b26','$b27','$b28','$b29')";
$ejecutar=mysqli_query($conexion, $sql);
if(!$ejecutar){
    
    echo "Hubo un error";
    
} else{
    
    echo "Datos Guardados correctamente";
    
}
?>
