<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
require("../conexion.php");
session_start();

if (@!$_SESSION['Nick']) {
	header("Location:../Login/login.php");
	
}

if(isset($_POST["Op"]))
  {
    $Op  = $_POST["Op"];
	$CodUsu = $_POST["CodUsu"];
	switch($Op)
	{
	  case "Agregar Empleado":
	  {
	  header("Location:  ../Formularios/registro-empleados.php " );
	  
	  /*
	   //echo "1";
	   $SQL1="UPDATE usuario SET Clave = '".md5("nuevo")."' WHERE Cod_usr=".$Cod_Usr;
	   //echo $SQL1;
	   $Punt1=mysqli_query($Conexion,$SQL1);*/
	   break;
	  }
	  case "Ver Asesores":
	  {
	    header("Location:  ../Vistas/VistaEmp.php " );
	   break;
	  }
	  case "Agregar Gerente":
	  {
	   $SQL1="DELETE FROM usuario WHERE Cod_usr=".$Cod_Usr;
	   //echo $SQL1;
	   $Punt3=mysqli_query($Conexion,$SQL1);
	  
	   break;
	  }
	  case "Ver Empleados":
	  {
	   header("Location:  ADMTipoUsr.php?Cod_usr=".$Cod_Usr );
	   break;
	  }
	  case "Ver Supervisores":
	  {
	   header("Location:  ImprimeUsr.php" );
	   break;
	  }
	  case "Ver Gerentes":
	  {
	   header("Location:  ImprimeUsr.php" );
	   break;
	  }
	  case "Generar Reporte de Usuarios":
	  {
	   header("Location:  ImprimeUsr.php" );
	   break;
	  }
	  case "Generar Reporte de Ventas Totales":
	  {
	   header("Location:  ImprimeUsr.php" );
	   break;
	  }
	}
	
  }
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
.Estilo1 {font-size: 24px}
-->
</style>
<script type="text/JavaScript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
	<link href="../Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../Bootstrap/css/estilos.css" rel="stylesheet">
	<style type="text/css">
<!--
body {
	background-image: url(../images/fondoesc.jpeg);
	max-height:auto;
}
-->
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="">

<table width="777" height="298" border="0" align="center" cellspacing="0">
  <tr>
    <td colspan="9" bgcolor="#009966"><p>Bienvenido: <strong><?php echo $_SESSION['Nick']?> </p>
      <p><a href="../Login/desconectar.php">Salir</a></p></td>
  </tr>
  <tr>
    <td colspan="9" bgcolor="#0066FF"><div align="center" class="Estilo1">MENU</div></td>
  </tr>
  <tr>
    <td width="36" bgcolor="#0066FF">&nbsp;</td>
    <td colspan="5" bgcolor="#0066FF"><label>
      <div align="center">
        <input id="Op" name="Op" type="submit" value="Agregar Empleado" class="btn btn-success btn-lg" />
        </div>
    </label>    </td>
    <td width="24" bgcolor="#0066FF">&nbsp;</td>
    <td width="102" bgcolor="#0066FF"><label>
       <input id="Op" name="Op" type="submit" value="Generar Reporte de Usuarios" class="btn btn-warning btn-lg">
    </label></td>
    <td width="63" bgcolor="#0066FF">&nbsp;</td>
  </tr>
  <tr>
    <td height="21" bgcolor="#0066FF">&nbsp;</td>
    <td width="129" bgcolor="#0066FF">&nbsp;</td>
    <td width="17" bgcolor="#0066FF">&nbsp;</td>
    <td width="115" bgcolor="#0066FF">&nbsp;</td>
    <td width="20" bgcolor="#0066FF">&nbsp;</td>
    <td width="106" bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
  </tr>
  <tr>
    <td height="30" bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF"> <div align="center">
      <input id="Op" name="Op" type="submit" value="Ver Asesores" class="btn btn-primary btn-lg">
    </div></td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF"><label>
       <div align="center">
         <input id="Op" name="Op" type="submit" value="Ver Supervisores" class="btn btn-primary btn-lg">
        </div>
    </label></td>
    <td bgcolor="#0066FF"><label></label></td>
    <td bgcolor="#0066FF"><label>
      <label>
       <div align="center">
         <input id="Op" name="Op" type="submit" value="Ver Gerentes" class="btn btn-primary btn-lg">
        </div>
      </label>
    </label></td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF"><label>
       <input id="Op" name="Op" type="submit" value="Generar Reporte de Ventas Totales" class="btn btn-default btn-lg">
    </label></td>
    <td bgcolor="#0066FF">&nbsp;</td>
  </tr>
  <tr>
    <td height="39" bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="9" bgcolor="#009966"><label></label></td>
  </tr>
</table>
</form>
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/responsive.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
