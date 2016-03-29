<?php 
include("../conexion.php");
$query = 'SELECT * FROM cargo';

$result = $Conexion->query($query);

if(isset($_POST["Guardar"]))
{
 $Nombre=$_POST["Nombre"];
 $Pass=$_POST["Pass"];
 $Preg=$_POST["Preg"];
 $id=$_POST["id"];
 $SQL1="INSERT INTO usuario";
 $SQL2="(CodUsu, CI, Nombre, PapCli, MapCli) VALUES ";
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
</head>

<body>
<form class="form-horizontal" role="form">
<table width="487" height="365" border="0" align="center" cellspacing="0">
  <tr>
    <td colspan="5" bgcolor="#000000">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5" bgcolor="#66CCCC"><div align="center" class="Estilo1">REGISTRO USUARIOS </div></td>
  </tr>
  <tr>
    <td width="58" bgcolor="#66CCCC">&nbsp;</td>
    <td width="194" bgcolor="#66CCCC"><div align="right"><h4>Nombre: </h4></div></td>
    <td width="45" bgcolor="#66CCCC">&nbsp;</td>
    <td width="189" bgcolor="#66CCCC">
  
      <input name="Nombre" type="text" class="form-control" id="Nombre"
             placeholder="Nombre de Usuario">	</td>
    <td width="103" bgcolor="#66CCCC"><label></label></td>
  </tr>
  <tr>
    <td height="21" bgcolor="#66CCCC">&nbsp;</td>
    <td bgcolor="#66CCCC">&nbsp;</td>
    <td bgcolor="#66CCCC">&nbsp;</td>
    <td bgcolor="#66CCCC">&nbsp;</td>
    <td bgcolor="#66CCCC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#66CCCC">&nbsp;</td>
    <td bgcolor="#66CCCC"><div align="right"><h4>Contrase&ntilde;a:</h4></div></td>
    <td bgcolor="#66CCCC">&nbsp;</td>
    <td bgcolor="#66CCCC"><input name="Pass" type="password" class="form-control" id="Pass"
             placeholder="Password"></td>
    <td bgcolor="#66CCCC"><label></label></td>
  </tr>
  <tr>
    <td height="21" colspan="5" bgcolor="#66CCCC">&nbsp;</td>
  </tr>
  <tr>
    <td height="27" bgcolor="#66CCCC"><label></label></td>
    <td height="27" bgcolor="#66CCCC"><div align="right"><h4>Pregunta de seguridad: </h4></div></td>
    <td height="27" bgcolor="#66CCCC">&nbsp;</td>
    <td height="27" bgcolor="#66CCCC">
      <input name="Preg" type="text" class="form-control" id="Preg"
             placeholder="Pregunta de Seguridad">    </td>
    <td height="27" bgcolor="#66CCCC">&nbsp;</td>
  </tr>
  <tr>
    <td height="21" bgcolor="#66CCCC">&nbsp;</td>
    <td bgcolor="#66CCCC">&nbsp;</td>
    <td bgcolor="#66CCCC">&nbsp;</td>
    <td bgcolor="#66CCCC">&nbsp;</td>
    <td bgcolor="#66CCCC">&nbsp;</td>
  </tr>
  <tr>
    <td height="30" bgcolor="#66CCCC">&nbsp;</td>
    <td bgcolor="#66CCCC"><div align="right"><h4>Nombre Empleado: </h4></div></td>
    <td bgcolor="#66CCCC">&nbsp;</td>
    <td bgcolor="#66CCCC"><select class="form-control">
  						<?php    
    while ( $row = $result->fetch_array() )    
    {
        ?>
    
        <option value=" <?php echo $row['Descripcion'] ?> " ><?php echo $row['Descripcion']; ?></option>
        
        <?php
    }    
    ?>  
					</select>     </td>
    <td bgcolor="#66CCCC">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#66CCCC">&nbsp;</td>
    <td bgcolor="#66CCCC">&nbsp;</td>
    <td bgcolor="#66CCCC">&nbsp;</td>
    <td bgcolor="#66CCCC">&nbsp;</td>
    <td bgcolor="#66CCCC">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5" bgcolor="#66CCCC"><div align="center">
      <button type="button" class="btn btn-primary" id="Guardar">Guardar</button>
    </div></td>
  </tr>
  <tr>
    <td colspan="5" bgcolor="#000000">&nbsp;</td>
  </tr>
</table>
</form>
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="../Bootstrap/js/responsive.js"></script>
    <script src="../Bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
