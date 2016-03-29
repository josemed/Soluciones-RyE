<?php
  $Host = "localhost"; //http://www.solodies.com/jheredia/
  $User = "root";
  $Pass = "";
  $BaseDeDatos="ventas3";
  $Conexion=mysqli_connect($Host,$User,$Pass);
  mysqli_select_db($Conexion,$BaseDeDatos);
?>
