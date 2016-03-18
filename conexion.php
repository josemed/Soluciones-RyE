<?php
  $Host = "localhost"; 
  $User = "root";
  $Pass = "";
  $BaseDeDatos="ventas";
  $Conexion=mysqli_connect($Host,$User,$Pass);
  mysqli_select_db($Conexion,$BaseDeDatos);
?>

