<?php 
include("conexion.php");
if(isset($_POST["Guardar2"]))
{
 $Nombre=$_POST["Nombre"];
 $Apat=$_POST["Apat"];
 $Amat=$_POST["Amat"];
 $CI=$_POST["CI"];
 $SQL1="INSERT INTO empleado";
 $SQL2="(CodEmp, CI, Nombre, PapEmp, MapEmp) VALUES ";
 $SQL3="(NULL, '$CI', '$Nombre', '$Apat', '$Amat') ";
 $SQLT=$SQL1.$SQL2.$SQL3;
 $id=1;
 $SQL4="INSERT INTO usuario";
 $SQL5="(CodEmp, CI, Nombre, PapEmp, MapEmp) VALUES ";
 $SQL3="(NULL, '$CI', '$Nombre', '$Apat', '$Amat') ";
 $Punt=mysqli_query($Conexion,$SQLT);
 $id++;
echo "<script>
               window.close();
               window.opener.location.reload(); 
            </script>";
}
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
<table width="487" height="355" border="0" align="center" cellspacing="0">
  <tr>
    <td colspan="5" bgcolor="#009966">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5" bgcolor="#0066FF"><div align="center" class="Estilo1">REGISTRO EMPLEADOS </div></td>
  </tr>
  <tr>
    <td width="58" bgcolor="#0066FF">&nbsp;</td>
    <td width="194" bgcolor="#0066FF"><div align="right">Nombre: </div></td>
    <td width="45" bgcolor="#0066FF">&nbsp;</td>
    <td width="189" bgcolor="#0066FF"><input name="Nombre" type="text" id="Nombre" /></td>
    <td width="103" bgcolor="#0066FF"><label></label></td>
  </tr>
  <tr>
    <td height="21" bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF"><div align="right"></div></td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF"><div align="right">Apellido Paterno: </div></td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF"><input name="Apat" type="text" id="Apat" /></td>
    <td bgcolor="#0066FF"><label></label></td>
  </tr>
  <tr>
    <td height="21" bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF"><div align="right"></div></td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF"><div align="right">Apellido Materno:</div></td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF"><input name="Amat" type="text" id="Amat" /></td>
    <td bgcolor="#0066FF"><label></label></td>
  </tr>
  <tr>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF"><div align="right"></div></td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF"><div align="right">Carnet de Identidad: </div></td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF"><input name="CI" type="text" id="CI" /></td>
    <td bgcolor="#0066FF"><label></label></td>
  </tr>
  <tr>
    <td height="21" colspan="5" bgcolor="#0066FF">&nbsp;</td>
  </tr>
  <tr>
    <td height="49" colspan="5" bgcolor="#0066FF"><label>
      <div align="center">
        <input name="Guardar2" type="submit" class="Estilo1" id="Guardar2" value="Guardar" />  
      </div>
      </label></td>
  </tr>
  <tr>
    <td colspan="5" bgcolor="#009966">&nbsp;</td>
  </tr>
</table>
</form>
</body>
</html>
