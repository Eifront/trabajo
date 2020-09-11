<?php

// PROGRAMA DE MENU
                                                    
session_start(); //valido que la secion este auntenticada
if ($_SESSION["autenticado"] != "SI")
    header('Location: index.php?mensaje=3');
?> 

<!DOCTYPE HTML PUBLIC >
     <html>
		<head>
			<title> Edición de Usuario
			</title>
			<link rel="stylesheet" href="mdl/material.min.css">
				<script src="mdl/material.min.js"></script>
		</head>
				
		<body>
			<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
				<header class="mdl-layout__header">
					<div class="mdl-layout__header-row">
					  <!-- Title -->
					  <span class="mdl-layout-title">Edición	  
					  </span>
					  <!-- Add spacer, to align navigation to the right -->
					  <div class="mdl-layout-spacer"></div>
					  <!-- Navigation. We hide it in small screens. -->
					  <nav class="mdl-navigation mdl-layout--large-screen-only">
						<a class="mdl-navigation__link" href="menu.php">Menu</a>

					  </nav>
					</div>
				</header>


				<div class="mdl-layout__drawer">
					<span class="mdl-layout-title">Editar</span>
					<nav class="mdl-navigation">
						<a class="mdl-navigation__link" href="menu.php">menu</a>
					</nav>
				</div>
				<main class="mdl-layout__content" style="margin:auto">
					
					<div class="mdl-typography--display-2-color-contrast" style="margin-top:20px">Datos</div>
						
					<div class="page-content" style="display:flex "> 
							
						<!--pedir datos formulario-->			
						<div>
						    
							<div style="margin-top:50px"><b>Identificacion: </b></div>
						</div>

						<!-- formulario-->
						<div style="margin-left:10px">		

							<form method="DELETE" action="editar.php">
							  
								<!-- Caja de texto Identificacion-->
								<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">						
									<input class="mdl-textfield__input" type="number" min=10000000 value=" " name= "identificacion" required>
									<label class="mdl-textfield__label" for="identificacion"></label>	
								</div><br>
								
								<!--Botón-->
								<button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" value="1" name="enviado"> 
									Eliminar
								</button><br>
							</form>

						</div>	
					</div>
				</main>
			</div><br>
		</body>
	</html>