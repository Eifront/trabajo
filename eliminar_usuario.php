<?php
 include("conexion3.php");
$ConectarBD = Conectar3();

 $Query = "DELETE FROM usuarios WHERE id='".$_GET['Tipoid']."'";
 if($Exito = $ConectarBD->query($Query))
 {
	 $ConectarBD->close();
	 header('Location: lista_usuarios.php');
 }
 else
 {
	 $ConectarBD->close();
	 var_dump($Query);
	 exit;
 }
?>   
