<?php
include("../conexion.php");
  if(isset($_POST["Op"]))
  {
    $Op  = $_POST["Op"];
	$Cod_Usr = $_POST["Usr"];
	switch($Op)
	{
	  case "Genera Clave":
	  {
	   //echo "1";
	   $SQL1="UPDATE usuario SET Clave = '".md5("nuevo")."' WHERE Cod_usr=".$Cod_Usr;
	   //echo $SQL1;
	   $Punt1=mysqli_query($Conexion,$SQL1);
	   break;
	  }
	  case "Nuevo Usuario":
	  {
	    header("Location:  AgregaUsu.php " );
	   break;
	  }
	  case "Borrar Usuario":
	  {
	   $SQL1="DELETE FROM usuario WHERE Cod_usr=".$Cod_Usr;
	   //echo $SQL1;
	   $Punt3=mysqli_query($Conexion,$SQL1);
	  
	   break;
	  }
	  case "Cambio TipoUsr":
	  {
	   header("Location:  ADMTipoUsr.php?Cod_usr=".$Cod_Usr );
	   break;
	  }
	  case "Imprimir":
	  {
	   header("Location:  ImprimeUsr.php" );
	   break;
	  }
	}
	
  }
  $SQL1 = "SELECT * FROM usuario ";
  $SQL2 = " ";
  $SQLT = $SQL1.$SQL2;
  $Punt=mysqli_query($Conexion,$SQLT);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
<style type="text/css">
<!--
.Estilo1 {font-size: 24px}
-->
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
<table width="697" height="298" border="0" align="center" cellspacing="0">
  <tr>
    <td colspan="9" bgcolor="#009966">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="9" bgcolor="#0066FF"><div align="center" class="Estilo1">MENU</div></td>
  </tr>
  <tr>
    <td width="19" bgcolor="#0066FF">&nbsp;</td>
    <td width="117" bgcolor="#0066FF"><label>
      <div align="center">
        <input name="Op" type="submit" id="Op" value="Ventas Asesor" />
      </div>
    </label></td>
    <td width="5" bgcolor="#0066FF">&nbsp;</td>
    <td width="120" bgcolor="#0066FF"><label>
      <input name="Op" type="submit" id="Op" value="Ventas Supervisor" />
    </label></td>
    <td width="10" bgcolor="#0066FF"><label></label></td>
    <td width="178" bgcolor="#0066FF"><label>
      <input name="Op" type="submit" id="Op" value="Generar Reportes de Asesor" />
    </label></td>
    <td width="12" bgcolor="#0066FF">&nbsp;</td>
    <td width="182" bgcolor="#0066FF"><label>
      <input name="Op" type="submit" id="Op" value="Generar Reportes Supervisor" />
    </label></td>
    <td width="36" bgcolor="#0066FF">&nbsp;</td>
  </tr>
  <tr>
    <td height="21" bgcolor="#0066FF">&nbsp;</td>
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
    <td height="30" bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF"><label></label></td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
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
</body>
</html>
