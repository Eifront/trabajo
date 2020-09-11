<?php

// PROGRAMA PARA MODIFICAR USUARIOS

 $todo = "nombre_completo = '".$_POST["nombre"]."', identificacion = '".$_POST["identificacion"]."', direccion = '".$_POST["direccion"]."', fecha_nacimiento = '".$_POST["fecha_nac"]."', login = '".$_POST["login"]."', passwd = '".$_POST["passwd"]."'";

//$nombre_completo = $_POST["nombre"];
//$identificacion = $_POST["identificacion"];
//$direccion = $_POST["direccion"];
//$fecha_nacimiento = $_POST["fecha_nac"];
//$login = $_POST["login"];
//$id = $_POST["id"] ;

                 
//echo "login es...".$login;
//echo "password es...".$passwd;

include ("conexion3.php");

$conectBD3 = Conectar3();

$Query = "UPDATE usuarios SET ".$todo."  WHERE id = '".$_POST["id"]."'";
$result1 = $conectBD3->query($Query);
	if($exito=$result1)
	{
		$conectBD3->close();
		header("Location: lista_usuarios.php");
		
	}else{
		var_dump($Query);
		exit;
	}

?>
