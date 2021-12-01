<?php
include("conexion.php");
$con=conectar();

$Procesador=$_POST['Procesador'];
$Tarjetagrafica = $_POST['Tarjetagrafica']; $RAM = $_POST['RAM'];
$Discoduro= $_POST['Discoduro'];
$Monitor=  $_POST['Monitor'];
	    
$sql="INSERT INTO computadora VALUES ('$Procesador','$Tarjetagrafica','$RAM','$Discoduro','$Monitor')";
$query=mysqli_query($con,$sql);

if($query){
    Header("Location: agregar.php");
}else{

}
?>