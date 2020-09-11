<?php

// PROGRAMA DE VALIDACION DE USUARIOS
                
                                                       
$login = $_POST["login"];
$passwd = $_POST["passwd"];

$passwd_comp = md5($passwd);
session_start();

//echo "login es...".$login;
//echo "password es...".$passwd;

include ("conexion3.php");
$conectarBD3  = Conectar3();
       
$sql = "SELECT * from usuarios WHERE login = '$login'";
//echo "sql es...".$sql;
$result1 = $conectarBD3->query($sql);// existe o no
$row1 = $result1->fetch_array(MYSQLI_NUM);//cuantas columnas tiene
$numero_filas = $result1->num_rows;//las pfilas que tiene
if ($numero_filas > 0)
  {
    $passwdc = $row1[5];

    if ($passwdc == $passwd_comp)
      {
        $_SESSION["autenticado"]= "SI";//si son iguales atoriza
        $tipo_usuario = $row1[6];
        $id=$row1[7];
        $nombre_usuario = $row1[0];
        $identificacion=$row1[1];
        $direccion=$row1[2];
        $fecha_nacimiento =$row1[3];
        $login =$row1[4];
		
        if ($tipo_usuario == 1)
			    $_SESSION["tipo_usuario"]= "Administrador";
        if ($tipo_usuario == 2)
			    $_SESSION["tipo_usuario"]= "Consulta";
			
          $_SESSION["id"]= $id; 
          $_SESSION["identificacion"]= $identificacion; 
          $_SESSION["nombre_usuario"]= $nombre_usuario;
          $_SESSION["direccion"]= $direccion;
          $_SESSION["fecha_nacimiento"]= $fecha_nacimiento; 
          $_SESSION["login"]= $login; 
			
			
		
        $conectarBD3->close();
        header("Location: lista_usuarios.php");
      }
    else 
     {
      $conectarBD3->close();
      header('Location: index.php?mensaje=1');
     }
  }
else
  {
    $conectarBD3->close();
    header('Location: lista_usuarios.php');
 }  
?>
