<?php

// PROGRAMA DE MENU
include ("conexion3.php");               
session_start(); //valido que la sesion este auntenticada
if ($_SESSION["autenticado"] != "SI")
{
	header('Location: paglogin.php?mensaje=3');
}
 $ConecBD3 = Conectar3();
?> 

<!DOCTYPE HTML PUBLIC >
     <html>
		<head>
			<title> Edicion de Usuario
			</title>
			<link rel="stylesheet" href="mdl/material.min.css">
				<script src="mdl/material.min.js"></script>
		</head>
				
		<body>
			<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
				<header class="mdl-layout__header">
					<div class="mdl-layout__header-row">
					  <!-- Title -->
					  <span class="mdl-layout-title">Edicion	  
					  </span>
					  <!-- Add spacer, to align navigation to the right -->
					  <div class="mdl-layout-spacer"></div>
					  <!-- Navigation. We hide it in small screens. -->
					  <nav class="mdl-navigation mdl-layout--large-screen-only">
						<a class="mdl-navigation__link" href="index.php">Pagina inicio</a>

					  </nav>
					</div>
				</header>


				<div class="mdl-layout__drawer">
					<span class="mdl-layout-title">Editar</span>
					<nav class="mdl-navigation">
						<a class="mdl-navigation__link" href="paglogin.php">menu</a>
					</nav>
				</div>
				<main class="mdl-layout__content" style="margin:auto">
					
					<div class="mdl-typography--display-2-color-contrast" style="margin-top:20px">Datos</div>
						
					<div class="page-content" style="display:flex "> 
							
						<!--pedir datos formulario-->			
						<div>
							<div style="margin-top:20px"><b>Nombre Completo: </b></div>
							<div style="margin-top:50px"><b>Identificacion: </b></div>
							<div style="margin-top:50px"><b>Direccion: </b></div>
							<div style="margin-top:50px"><b>Fecha Nacimiento: </b></div>
							<div style="margin-top:50px"><b>Login: </b></div>
							<div style="margin-top:50px"><b>pass: </b></div>
							<div style="margin-top:50px"><b>ID: </b></div>
						</div>

						<!-- formulario-->
						<div style="margin-left:10px">		

							<form method="POST" action="editar.php">

								<!-- Caja de texto Nombre Completo-->
								<div  class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label ">
									<input class="mdl-textfield__input" type="text" value=" " name="nombre" required>
									<label class="mdl-textfield__label " for="nombre"></label>
								</div><br>
							  
								<!-- Caja de texto Identificacion-->
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">						
									<input class="mdl-textfield__input" type="number" min=10000000 value=" " name= "identificacion" required>
									<label class="mdl-textfield__label" for="identificacion"></label>	
								</div><br>
								 
								<!-- Caja de texto Direccion-->					 
								<div  class="mdl-textfield mdl-js-textfield ">
									<input class="mdl-textfield__input" type="text" value=" " name= "direccion" required>
									<label class="mdl-textfield__label " for="direccion"></label>
								</div><br>
								
								<!-- Caja de texto Fecha Nacimiento--> 
								<div  class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label ">
									<input class="mdl-textfield__input" type="date" value=" " name="fecha_nac">
									<label class="mdl-textfield__label " for="fecha_nac"></label>
								</div><br>	
						  
								<!-- Caja de texto Login-->
								<div  class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label ">
									<input class="mdl-textfield__input" type="text" value=" " name="login" required>
									<label class="mdl-textfield__label " for="login"></label>
								</div><br>	

								<div  class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label ">
									<input class="mdl-textfield__input" type="password" value=" " name="passwd" required>
									<label class="mdl-textfield__label " for="passwd"></label>
								</div><br>	
								
								<!-- variable id-->
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
									<input class="mdl-textfield__input" type="text" value=" " name="id" required>
									<label class="mdl-textfield__label " for="id"></label>

								</div><br>	
								
								<!--Botón-->
								<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" value="1" name="enviado"> 
									Modificar
								</button><br>
								
							</form>

						</div>	
					</div>
				</main>
			</div><br>
		</body>
	</html>