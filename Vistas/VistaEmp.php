<?PHP
  include("../conexion2.php");
  if(isset($_GET["CodEmp"]))
  {
  	if(isset($_POST["Eliminar"]))
	{
    $CodEmp = $_GET["CodEmp"];
	$SQL1 = "DELETE FROM empleado ";
    $SQL2 = "WHERE CodEmp = '$CodEmp'";
    $SQLT = $SQL1.$SQL2;
    $PuntLec=mysqli_query($Conexion,$SQLT);
	}
  }
  $SQL1 = "SELECT *";
  $SQL2 = "FROM empleado WHERE CodCar = 3";
  $SQLT = $SQL1.$SQL2;
  $PuntLector=mysqli_query($Conexion,$SQLT);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Soluciones RyE</title>
<script type="text/JavaScript">
<!--
function AbreVentana(Dire,Nombre,Prop) 
   { //v2.0
    window.open(Dire,Nombre,Prop);
   }
//-->
</script>
<style type="text/css">
<!--
.Estilo1 {font-size: 36px}
.Estilo2 {font-size: 9px}
.Estilo8 {font-size: 14px; font-weight: bold; color: #FFFFFF; }
-->
</style>
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
<form id="form1" name="form1" method="post" action="?">

<table width="869" border="0" align="center" cellspacing="0" bgcolor="#009999">
  <tr bgcolor="#0033FF">
    <td colspan="7" bgcolor="#0033FF">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="7" bgcolor="#FFFFFF"><div align="center" class="Estilo1">ASESORES</div></td>
  </tr>
  <tr>
    <td colspan="2"><span class="Estilo2"><a href="ImprimirLector.php">Imprimir Lista </a></span></td>
    <td colspan="3">&nbsp;</td>
    <td colspan="2"><span class="Estilo2">
	<a href="#" onclick="AbreVentana('AdiLector.php','ventana','width=660,height=440')">Nuevo Asesores </a></span></td>
  </tr>
  <tr>
    <td width="50"><p align="center" class="Estilo8">NRO</p>
    </td>
    <td width="182"><div align="center" class="Estilo8">Nombre</div></td>
    <td width="196"><p align="center" class="Estilo8">Apellido</p>
    <p align="center" class="Estilo8">Paterno</p></td>
    <td width="199"><p align="center" class="Estilo8">Apellido</p>
    <p align="center" class="Estilo8">Materno</p></td>
    <td width="95"><p align="center" class="Estilo8">Fecha de</p>
    <p align="center" class="Estilo8">nacimiento</p></td>
    <td width="64"><div align="center" class="Estilo8">Eliminar</div></td>
    <td width="69"><div align="center" class="Estilo8">Editar</div></td>
  </tr>
  <?PHP
  $Color1 = "#006666";
  $Color2 = "#0066FF";
  $i=1;
  while($Reg=mysqli_fetch_row($PuntLector))
  {
    if($i%2==0) $Color = $Color1;
	else        $Color = $Color2;
	$i=$i+1;
  ?>
  <tr>
    <td bgcolor="<?PHP echo $Color; ?>"><?PHP echo $Reg[0]; ?></td>
    <td bgcolor="<?PHP echo $Color; ?>"><?PHP echo $Reg[2]; ?> </td>
    <td bgcolor="<?PHP echo $Color; ?>"><?PHP echo $Reg[3]; ?> </td>
    <td bgcolor="<?PHP echo $Color; ?>"><?PHP echo $Reg[4]; ?> </td>
    <td bgcolor="<?PHP echo $Color; ?>"><?PHP echo $Reg[5]; ?> </td>
    <td bgcolor="<?PHP echo $Color; ?>"><div align="center"><a href="?CodEmp=<?PHP echo $Reg[0]; ?>"> <input id="Eliminar" name="Eliminar" type="submit" value="Eliminar" class="btn btn-danger btn-lg" /></a></div></td>
    <td bgcolor="<?PHP echo $Color; ?>">
	  <div align="center"><a href="#" onclick="AbreVentana('ModificaEmp.php?CodEmp=<?PHP echo $Reg[0]; ?>','ventana','width=660,height=440')"></a> <input id="Editar" name="Editar" type="submit" value="Editar" class="btn btn-success btn-lg" /></div></td>
  </tr>
  <?PHP
  }
  ?>
  <tr bgcolor="#0033FF">
    <td colspan="7">&nbsp;</td>
  </tr>
</table>

</form>
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="../Bootstrap/js/responsive.js"></script>
    <script src="../Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
