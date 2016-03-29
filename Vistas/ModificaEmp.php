<?PHP
    include("../conexion2.php");
	
	if(isset($_POST["Guardar1"]))
	{
	 // ingresa si presiono guardar1
	 $CodEmp   = $_POST["CodEmp"];
	 $Nombre   = $_POST["Nombre"];
	 $PApellido = $_POST["PApellido"];
	 $SApellido = $_POST["SApellido"];
	 $FN = $_POST["FN"];
	 
	 $SQL1="UPDATE Lector SET ";
	 $SQL2="Nombre= '$Nombre', PApellido = '$PApellido', SApellido = '$SApellido', FN = '$FN' ";
	 $SQL3="WHERE Cod_Le = '$Cod_Le' ";
	 $SQLT=$SQL1.$SQL2.$SQL3 ;
	 $PuntLe=mysqli_query($Conexion,$SQLT);
	 //UPDATE  `biblioteca2014`.`lector` SET  `FN` =  '1969-08-05' WHERE  `lector`.`Cod_Le` =2;
	 echo "<script>
               window.close();
               window.opener.location.reload(); 
            </script>";
	}
		/* EXAMEN PARA LA CASA MODIFICAR MEDIANTE EXCEL*/
		if(isset($_POST["Altas"]))
		{	
			 if(isset($_FILES['Archivo']['name']))
			{
				  move_uploaded_file($_FILES['Archivo']['tmp_name'], "UpLoad".'/'."RegistroLector.xls");
				  
				  require_once 'ExcelEnPHP/Excel/reader.php';
                  $data = new Spreadsheet_Excel_Reader();
                  $data->setOutputEncoding('CP1251');
                  $data->read('Upload/RegistroLector.xls');
                  $Nombre    = $data->sheets[0]['cells'][4][5];
                  $PApellido  = $data->sheets[0]['cells'][5][5];
                  $SApellido = $data->sheets[0]['cells'][6][5];
                  $FN        = $data->sheets[0]['cells'][7][5];

                  $SQL1="INSERT INTO lector(Cod_Le, Nombre, PApellido, SApellido, FN) VALUES ";
                  $SQL2="(NULL,'$Nombre','$PApellido','$SApellido','$FN'); ";
                  $SQLT= $SQL1.$SQL2;
                  $PuntLe=mysqli_query($Conexion,$SQLT);
			  	 echo "<script>
                          window.close();
                          window.opener.location.reload(); 
                       </script>";

			}
		}
		/* FIN EXAMEN PARA LA CASA MODIFICAR MEDIANTE EXCEL*/
		$CodEmp=$_GET["CodEmp"];
	    $SQL1="SELECT * ";
	    $SQL2="FROM empleado ";
	    $SQL3="WHERE CodEmp='$CodEmp' ";
	    $SQLT=$SQL1.$SQL2.$SQL3 ;
	//	echo $SQLT;
		
	    $PuntL=mysqli_query($Conexion,$SQLT);
	    if($Reg=mysqli_fetch_row($PuntL))
	    {
	       $Nombre = $Reg[1];
	       $PApellido = $Reg[2];
	       $SApellido = $Reg[3];
	       $FN = $Reg[4];
	    }
	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<form action="?" method="post" enctype="multipart/form-data">
<table width="623" border="0" cellspacing="0" bgcolor="#009999">
  <tr>
    <td colspan="3" bgcolor="#0033FF">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><div align="center">MODIFICACION DE REGISTRO DE  LECTOR </div></td>
  </tr>
  <tr>
    <td colspan="3"><input name="CodEmp" type="hidden" id="CodEmp" value="<?PHP echo $CodEmp; ?>" /></td>
  </tr>
  <tr>
    <td width="311"><div align="right">
      Nombre del lector </div></td>
    <td width="13">&nbsp;</td>
    <td width="293"><label>
      <input name="Nombre" type="text" id="Nombre" value="<?PHP echo $Nombre; ?>" size="20" maxlength="50" />
    </label></td>
  </tr>
  <tr>
    <td><div align="right">Apellido Paterno del lector </div></td>
    <td>&nbsp;</td>
    <td><label>
      <input name="PApellido" type="text" id="PApellido" value="<?PHP echo $PApellido; ?>" size="30" maxlength="30" />
    </label></td>
  </tr>
  <tr>
    <td><div align="right">Apellido Materno del Lector </div></td>
    <td>&nbsp;</td>
    <td><label>
      <input name="SApellido" type="text" id="SApellido" value="<?PHP echo $SApellido; ?>" size="30" maxlength="30" />
    </label></td>
  </tr>
  <tr>
    <td><div align="right">Fecha de Nacimiento </div></td>
    <td>&nbsp;</td>
    <td><label>
      <input name="FN" type="date" id="FN" value="<?PHP echo $FN; ?>" size="10" maxlength="10" />
    </label></td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3"><label>
      <div align="center">
        <input name="Guardar1" type="submit" id="Guardar1" value="Guardar" />
        </div>
    </label></td>
  </tr>
  <tr>
    <td colspan="3" bgcolor="#0033FF">&nbsp;</td>
    </tr>
  <tr>
    <td colspan="3"><div align="center"><a href="Download/RegistroLector.xls">Bajar Registro de Lectror</a> </div></td>
    </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
    </tr>
  <tr>
    <td><div align="right">Subir Archivo Nuevo lector: </div></td>
    <td>&nbsp;</td>
    <td><label>
      <input name="Archivo" type="file" id="Archivo" size="20" maxlength="255" />
    </label></td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
    </tr>
  <tr>
    <td colspan="3"><div align="center">
      <input name="Altas" type="submit" id="Altas" value="Guardar" />
    </div></td>
    </tr>
  <tr>
    <td colspan="3" bgcolor="#0033FF">&nbsp;</td>
    </tr>
</table>
</form>
</body>
</html>
