<?php 
session_start();
if($_SESSION['Nick']){	
	session_destroy();
	header("location:login.php");
}
else{
	header("location:login.php");
}
?>