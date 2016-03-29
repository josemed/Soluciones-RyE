<?php
session_start();
	require("../conexion.php");

	$username=$_POST['Nombre'];
	$pass=$_POST['Pass'];
	$pass=md5($pass);



	$sql2=mysql_query("SELECT * FROM usuario WHERE Nick='$username'" );
	$sql3=mysql_query("SELECT * FROM cargo WHERE CodCar='1'");
	if($f2=mysql_fetch_array($sql2))
	{
		if($pass==$f2['Pass'])
		{
		 	if($f3=mysql_fetch_array($sql3))
			{
			 	if($f2['CodCar']==1 && $f2['CodCar']==$f3['CodCar'])
				{
					$_SESSION['CodUsu']=$f2['CodUsu'];
					$_SESSION['Nick']=$f2['Nick'];
					echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
					echo "<script>location.href='../Menus/menu-admi.php'</script>";
				}
		
			}
		}
		else
		{
			echo '<script>alert("Error de Contraseña")</script> ';
			echo "<script>location.href='login.php'</script>";	
		}
	}
	
	$sql2=mysql_query("SELECT * FROM usuario WHERE Nick='$username'" );
	$sql3=mysql_query("SELECT * FROM cargo WHERE CodCar='2'");
	if($f2=mysql_fetch_array($sql2))
	{
		if($pass==$f2['Pass'])
		{
		 	if($f3=mysql_fetch_array($sql3))
			{
			 	if($f2['CodCar']==2 && $f2['CodCar']==$f3['CodCar'])
				{
					$_SESSION['CodUsu']=$f2['CodUsu'];
					$_SESSION['Nick']=$f2['Nick'];
					echo '<script>alert("BIENVENIDO GERENTE")</script> ';
					echo "<script>location.href='../Menus/menu-gerente.php'</script>";
				}
		
			}
		}
	}
	$sql2=mysql_query("SELECT * FROM usuario WHERE Nick='$username'" );
	$sql3=mysql_query("SELECT * FROM cargo WHERE CodCar='3'");
	if($f2=mysql_fetch_array($sql2))
	{
		if($pass==$f2['Pass'])
		{
		 	if($f3=mysql_fetch_array($sql3))
			{
			 	if($f2['CodCar']==3 && $f2['CodCar']==$f3['CodCar'])
				{
					$_SESSION['CodUsu']=$f2['CodUsu'];
					$_SESSION['Nick']=$f2['Nick'];
					echo '<script>alert("BIENVENIDO SUPERVISOR")</script> ';
					echo "<script>location.href='../Menus/menu-supervisor.php'</script>";
				}
		
			}
		}
		else
		{
			echo '<script>alert("Error de Contraseña")</script> ';
			echo "<script>location.href='login.php'</script>";	
		}
	}
	$sql2=mysql_query("SELECT * FROM usuario WHERE Nick='$username'" );
	$sql3=mysql_query("SELECT * FROM cargo WHERE CodCar='4'");
	if($f2=mysql_fetch_array($sql2))
	{
		if($pass==$f2['Pass'])
		{
		 	if($f3=mysql_fetch_array($sql3))
			{
			 	if($f2['CodCar']==4 && $f2['CodCar']==$f3['CodCar'])
				{
					$_SESSION['CodUsu']=$f2['CodUsu'];
					$_SESSION['Nick']=$f2['Nick'];
					echo '<script>alert("BIENVENIDO ASESOR")</script> ';
					echo "<script>location.href='../Menus/menu-Asesor.php'</script>";
				}
		
			}
		}
		else
		{
			echo '<script>alert("Error de Contraseña")</script> ';
			echo "<script>location.href='login.php'</script>";	
		}
	}



	else //else general 
	{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='login.php'</script>";	

	}

?>