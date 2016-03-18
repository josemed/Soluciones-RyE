<?php include("conexion.php");
if(isset($_POST["Guardar"]))
{
 $Nombre=$_POST["Nombre"];
 $Apat=$_POST["Apat"];
 $Amat=$_POST["Amat"];
 $CI=$_POST["CI"];
 $SQL1="INSERT INTO cliente";
 $SQL2="(CodCli, CI, Nombre, PapCli, MapCli) VALUES ";
 $SQL3="(NULL, '$CI', '$Nombre', '$Apat', '$Amat') ";
 $SQLT=$SQL1.$SQL2.$SQL3;
 $Punt=mysqli_query($Conexion,$SQLT);
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
<table width="599" height="369" border="0" align="center" cellspacing="0">
  <tr>
    <td colspan="7" bgcolor="#009966">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="7" bgcolor="#0066FF"><div align="center" class="Estilo1">REGISTRO CLIENTES </div></td>
  </tr>
  <tr>
    <td width="49" bgcolor="#0066FF">&nbsp;</td>
    <td width="51" bgcolor="#0066FF">&nbsp;</td>
    <td width="133" bgcolor="#0066FF"><div align="right">Nombre: </div></td>
    <td width="22" bgcolor="#0066FF">&nbsp;</td>
    <td width="130" bgcolor="#0066FF"><label>
      <input name="Nombre" type="text" id="Nombre" />
    </label></td>
    <td width="84" bgcolor="#0066FF">&nbsp;</td>
    <td width="79" bgcolor="#0066FF">&nbsp;</td>
  </tr>
  <tr>
    <td height="21" bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF"><div align="right"></div></td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF"><div align="right">Apellido Paterno: </div></td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF"><label>
      <input name="Apat" type="text" id="Apat" />
    </label></td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
  </tr>
  <tr>
    <td height="21" bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF"><div align="right"></div></td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF"><div align="right">Apellido Materno:</div></td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF"><label>
      <input name="Amat" type="text" id="Amat" />
    </label></td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF"><div align="right"></div></td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF"><div align="right">Carnet de Identidad: </div></td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF"><label>
      <input name="CI" type="text" id="CI" />
    </label></td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="7" bgcolor="#0066FF"><label>
      <div align="center">
        <input name="Guardar" type="submit" class="Estilo1" id="Guardar" value="Guardar" />
        </div>
    </label></td>
  </tr>
  <tr>
    <td colspan="7" bgcolor="#009966">&nbsp;</td>
  </tr>
</table>
</form>
</body>
</html>
