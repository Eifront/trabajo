   <!DOCTYPE HTML PUBLIC >
   <!--pagina de ejemplos de pag web..plantillas-->
<html>
	<head>
			<title> 
				Login
			</title> 

	</head>
    <body>

<!-----------------------CUADRO DE ENCABEZADO----------------->
    
    <header>
    </header>
       
	   
<!--------------- caja de texto temp actual------------->
 
		<div class="caja">
		<div>
		<!--formulario iniciar sesion-->
				<div>
					<form method="POST" action="validar.php">
							<div >
								<input type="text" value="" name="log" required>
								<label for="log">Login</label>
							</div><br>
						  
							<div>
								<input  type="password" value="" name="pass" required>
								<label  for="pass">password</label>
							</div><br>
					  
							<button > 
								Entrar
							</button><br>
							
                         
						<?php
						if (isset($_GET["valido"])) ///recibo el msj que llega de validar.php
						 {
						 $mensaje = $_GET["guardo"];///rescibe el msj y guarda
							if ($_GET["no pasa nada"]!=""){///si nollega nada-no pasa nada
						?>
						<tr>
						<td>
						  <div class="mdl-typography--display-1-color-contrast">Datos Incorrectos:</div>
						  </td>
						  <td>
							<?php 
							   if ($mensaje == 1)
								 echo "<div class= mdl-typography--display-1-color-contrast> El password del usuario no coincide.</div>";
							   if ($mensaje == 2)
								 echo "No hay usuarios con el login ingresado.";
							   if ($mensaje == 3)
								 echo "No se ha logueado en el Sistema. Por favor ingrese los datos.";
							   if ($mensaje == 4)
								 echo "Su tipo de usuario, no tiene las credenciales suficientes para ingresar a esta opción.";
							?>                         
						  </td>
						</tr>  
						<?php 
						   }
						 }
						?>
					   <br><br>
					</form>


					
					<form method="POST" action="editar_usuario.php">
						<div >
							<button > 
								Editar usuario
							</button><br>
						</div>
					</form>

					<!--<form method="POST" action="borrar_usuario.php">
						<div >
							<button > 
								Borrar usuario
							</button><br>
						</div>
					</form>-->
				</div><!---llama una funcion crear usuario-->
					<form method="POST" action="crear_usuario.php">
						<button href="crear_usuario.php"> 
									Registrarse
						</button><br>
					</form>
			</div>
		</div>
	<!--------------- caja de PIE DE PAGINA------------->

			<div>
			</div>
	</body>
</html>