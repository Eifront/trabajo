<?php

// PROGRAMA PARA REGISTRAR USUARIOS

$nombre_completo = $_POST["nombre"];
$identificacion = $_POST["identificacion"];
$direccion = $_POST["direccion"];
$fecha_nacimiento = $_POST["fecha_nac"];
$login = $_POST["login"];
$passwd = md5($_POST["passwd"]);
                 
//echo "login es...".$login;
//echo "password es...".$passwd;

include ("conexion.php");

$mysqli = new mysqli($host, $user, $pw, $db);
       
$sql = "INSERT INTO usuarios(nombre_completo, identificacion, direccion, fecha_nacimiento, login, passwd, tipo_usuario) 
         VALUES ('$nombre_completo','$identificacion','$direccion','$fecha_nacimiento','$login','$passwd',2)";
$result1 = $mysqli->query($sql);
   echo '
		<link rel="stylesheet" href="mdl/material.min.css">
		<link rel="stylesheet" href="Estilos_2.css">
		<script src="mdl/material.min.js"></script>
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	
		
		<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
		  <header class="mdl-layout__header">
			<div class="mdl-layout__header-row">
			  
			  <!-- Tituo -->
			  <span class="mdl-layout-title">Confirmación	  
			  </span>
			  
			  <div class="mdl-layout-spacer"></div>
			  
			  <!-- menu de barra superior -->
			  <nav class="mdl-navigation mdl-layout--large-screen-only">
				<a class="mdl-navigation__link" href="index.php">Volver</a>
			  </nav>
			  
			</div>
		  </header>
		</div>
		
		<div class="caja2">
			<main class="mdl-layout__content">
				<div class="page-content">';
   if($result1){
	 echo "<div class=mdl-typography--display-1-color-contrast align=center style=margin-top:80px>Datos Ingresados Correctamente</div><br>" ;
    }
   else   
	 echo "<div class=mdl-typography--display-1-color-contrast align=center style=margin-top:80px>Error al Ingresar Datos</div><br>";
	 
	 echo '
					<div style="display:flex">
						<div style="margin-left:90px">
							<form action="editar_usuario.php" method="POST">
								<button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" href="editar_usuario.php">
								  Editar
								</button>
							</form>
						</div>
						<div style="margin-left:50px">
							<form  action="crear_usuario.php" method="POST" >
								<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" value="1" name="enviado"> 
									Crear nuevo usuario
								</button>
							</form>
						</div><br>
					</div>
				</div>
		
			</main>
		</div><br>';  
?>
