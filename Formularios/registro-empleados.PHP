<?php 
require("../conexion.php");
session_start();

if (@!$_SESSION['Nick'])
 {
	header("Location:../Login/login.php");
	
}
include("../conexion2.php");
$query = 'SELECT * FROM cargo';
$result = $Conexion->query($query);
 if(isset($_POST["Guardar"]))
  {
  	 $CodCar=$_POST["CodCar"];
	 $Nick=$_POST["Nick"];
	 $SQL1="INSERT INTO usuario";
	 $SQL2="(CodUsu, Nick, Pass, CodCar) VALUES ";
	 $SQL3="(NULL, '$Nick', 'a1ad855ed53cdbe95c63898b0225d8b9', '$CodCar') ";
	 $SQLT=$SQL1.$SQL2.$SQL3;
	 $Punt1=mysqli_query($Conexion,$SQLT);
	 /*
	 $query2 = 'SELECT * FROM Usuario';
	 $result2= $Conexion->query($query2);
	 while ( $row = $result2->fetch_array() )    
    {
	 $CodUsu=$row['CodUsu']; 
	 }
    	
	 */
  	 $Nombre=$_POST["Nombre"];
 	 $Papellido=$_POST["Papellido"];
	 $Sapellido=$_POST["Sapellido"];
	 $CI=$_POST["CI"];
	 $FechaNac=$_POST["FechaNac"];
	 $Telefono=$_POST["Telefono"];
	 $Celular=$_POST["Celular"];
	 $Correo=$_POST["Correo"];
	 
	 $SQL4="INSERT INTO empleado ";
	 $SQL5="(CodEmp, CI, Nombre, PapEmp, MapEmp, FechaNac, Telefono, Celular, Correo, CodCar) VALUES ";
	 $SQL6="(NULL, '$CI','$Nombre', '$Papellido', '$Sapellido', '$FechaNac', '$Telefono', '$Celular',  '$Correo', '$CodCar') ";
	 $SQLT2=$SQL4.$SQL5.$SQL6;
	 $Punt2=mysqli_query($Conexion,$SQLT2);
	 
			 echo '<script>alert("Se creo el Empleado Correctamente Password por Defecto Soluciones RyE")</script> ';
			echo "<script>location.href='../Menus/menu-admi.php'</script>";	
  }
  if(isset($_POST["Cancelar"]))
  {
  	header("Location:  ../Menus/menu-admi.php");
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
<form id="form2" name="form2" method="post" action="">
<table width="829" height="428" border="0" align="center" cellspacing="0">
  <tr>
    <td colspan="10" bgcolor="#009966"><p>Bienvenido: <strong><?php echo $_SESSION['Nick']?> </p>
      <p><a href="../Login/desconectar.php">Salir</a></p></td>
  </tr>
  <tr>
    <td colspan="10" bgcolor="#0066FF"><div align="center" class="Estilo1">
      <p>REGISTRO EMPLEADOS </p>
      </div></td>
	
  </tr>
  <tr>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF"><label></label></td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
  </tr>
  <tr>
    <td width="38" bgcolor="#0066FF">&nbsp;</td>
    <td width="150" bgcolor="#0066FF"><div align="right">Nombre: </div></td>
    <td width="29" bgcolor="#0066FF">&nbsp;</td>
    <td width="172" bgcolor="#0066FF"><input name="Nombre" type="text" class="form-control" id="Nombre" placeholder="Nombre"></td>
    <td width="22" bgcolor="#0066FF"><label></label></td>
    <td width="148" bgcolor="#0066FF"><div align="right">Telefono:</div></td>
    <td width="23" bgcolor="#0066FF">&nbsp;</td>
    <td width="168" bgcolor="#0066FF"><input name="Telefono" type="text" class="form-control" id="Telefono"
             placeholder="Telefono"></td>
    <td width="21" bgcolor="#0066FF">&nbsp;</td>
    <td width="38" bgcolor="#0066FF">&nbsp;</td>
  </tr>
  <tr>
    <td height="21" bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF"><div align="right"></div></td>
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
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF"><div align="right">Apellido Paterno: </div></td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF"><input name="Papellido" type="text" class="form-control" id="Papellido"
             placeholder="Apellido Paterno"></td>
    <td bgcolor="#0066FF"><label></label></td>
    <td bgcolor="#0066FF"><div align="right">Celular:</div></td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF"><input name="Celular" type="text" class="form-control" id="Celular"
             placeholder="Celular"></td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
  </tr>
  <tr>
    <td height="21" bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF"><div align="right"></div></td>
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
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF"><div align="right">Apellido Materno:</div></td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF"><input name="Sapellido" type="text" class="form-control" id="Sapellido"
             placeholder="Apellido Materno"></td>
    <td bgcolor="#0066FF"><label></label></td>
    <td bgcolor="#0066FF"><div align="right">Correo:</div></td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF"><input type="email" class="form-control" id="Correo" name="Correo"
             placeholder="Correo"></td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF"><div align="right"></div></td>
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
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF"><div align="right">Carnet de Identidad: </div></td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF"><input name="CI" type="text" class="form-control" id="CI"
             placeholder="Carnet de Identidad"></td>
    <td bgcolor="#0066FF"><label></label></td>
    <td bgcolor="#0066FF"><div align="right">Cargo:</div></td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">
      <div align="center">
       <select class="form-control" name="CodCar" id="CodCar">
  						<?php    
    while ( $row = $result->fetch_array() )    
    {
        ?>
    
        <option value=" <?php echo $row['CodCar']; ?> " >
        <?php echo $row['Descripcion']; ?>
        </option>
        
        <?php
    }    
    ?>  
					</select>
 
      </div>
    
	</td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
  </tr>
  <tr>
    <td height="21" bgcolor="#0066FF">&nbsp;</td>
    <td height="21" bgcolor="#0066FF">&nbsp;</td>
    <td height="21" bgcolor="#0066FF">&nbsp;</td>
    <td height="21" bgcolor="#0066FF">&nbsp;</td>
    <td height="21" bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
  </tr>
  <tr>
    <td height="25" bgcolor="#0066FF"><label></label></td>
    <td height="25" bgcolor="#0066FF"><div align="right">Fecha de Nacimiento: </div></td>
    <td height="25" bgcolor="#0066FF">&nbsp;</td>
    <td height="25" bgcolor="#0066FF"><label>
     <input name="FechaNac" type="date" class="form-control" id="ejemplo_email_3"
             placeholder="Fecha de Nacimiento">
    </label></td>
    <td height="25" bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF"><div align="right">Nombre de Usuario </div></td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF"><input name="Nick" type="text" class="form-control" id="Nick"
             placeholder="Carnet de Identidad" /></td>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#0066FF">&nbsp;</td>
    <td bgcolor="#0066FF">&nbsp;</td>
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
    <td colspan="10" bgcolor="#0066FF">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="10" bgcolor="#0066FF"><div align="center">
         <input name="Guardar" type="submit" class="btn btn-success" id="Guardar" value="Guardar">
		 <input name="Cancelar" type="submit" class="btn btn-danger" id="Cancelar" value="Cancelar">
      </div>
     </td>
  </tr>
  <tr>
    <td colspan="10" bgcolor="#009966">&nbsp;</td>
  </tr>
</table>
</form>
    
</body>
</html>
