<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
session_start();

if (@!$_SESSION['Nick']) {
	header("Location:../Login/login.php");
	
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
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">
</head>

<body>
<form id="form1" name="form1" method="post" action="">

<table width="777" height="298" border="0" align="center" cellspacing="0">
  <tr>
    <td colspan="9" bgcolor="#009966"><p>Bienvenido: <strong><?php echo $_SESSION['Nick']?></p>
      <p><a href="../Login/desconectar.php">Salir</a></p></td>
  </tr>
  <tr>
    <td colspan="9" bgcolor="#0066FF"><div align="center" class="Estilo1">MENU</div></td>
  </tr>
  <tr>
    <td width="36" bgcolor="#0066FF">&nbsp;</td>
    <td width="129" bgcolor="#0066FF"><label>
      <input type="submit" name="Submit" value="Ventas Asesor" />
    </label></td>
    <td width="17" bgcolor="#0066FF">&nbsp;</td>
    <td width="115" bgcolor="#0066FF"><label>
      <input type="submit" name="Submit2" value="Generar Reportes " />
    </label></td>
    <td width="20" bgcolor="#0066FF"><label></label></td>
    <td width="106" bgcolor="#0066FF"><label>
    <input type="submit" name="Submit3" value="Agregar Ventas" />
    </label></td>
    <td width="24" bgcolor="#0066FF">&nbsp;</td>
    <td width="102" bgcolor="#0066FF"><label>
    <input type="submit" name="Submit4" value="Agregar Clientes" />
    </label></td>
    <td width="63" bgcolor="#0066FF">&nbsp;</td>
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
