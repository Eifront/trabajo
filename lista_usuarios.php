<?php
include("conexion3.php");
?>

<!DOCTYPE HTML PUBLIC >
     <html>
		<head>
			<title> Lista de Usuarios
			</title>
			<link rel="stylesheet" href="mdl/material.min.css">
				<script src="mdl/material.min.js"></script>
		</head>
		
		<body>
<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">Registro	  
	  </span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>

      <!-- Navigation. We hide it in small screens. -->
      <nav class="mdl-navigation mdl-layout--large-screen-only">

		<a class="mdl-navigation__link" href="index.php">Volver</a>

      </nav>
    </div>
  </header>


<div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Menu</span>
    <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="paglogin.php">Volver</a>
    </nav>
</div>

	<main class="mdl-layout__content " style="" >

		<div class="mdl-typography--display-2-color-contrast" aling="center" style="margin-top:20px">Formulario</div>
		
		<div class="page-content" style="display:flex "></div>
				
	<!--pedir datos formulario-->			
			<div >
			<?php
			  $conectBD3 = Conectar3();
			  $Query = "SELECT * FROM usuarios ORDER BY nombre_completo";
                      if($relsult = $conectBD3->query($Query))
                      {
                          while($recortodo = $relsult->fetch_assoc())
                          {
							  echo"<ul> ";
							  echo"<p>".$recortodo{'nombre_completo'}."</p>";
							  echo"<p>".$recortodo{'identificacion'}."</p>";
							  echo"<p>".$recortodo{'direccion'}."</p>";
							  echo"<p>".$recortodo{'fecha_nacimiento'}."</p>";
							  echo"<p>".$recortodo{'login'}."</p>";
							  echo"<a href='eliminar_usuario.php?Tipoid=".$recortodo['id']."'><button onclick='return Eliminar()' value = 'Eliminar' style='width: 60px;height:40px'>Eliminar</button> </a>";
							  echo"</ul>";
						  }
						  $relsult->free();
					  }
					  $conectBD3->close();
			?>
			</div>
		</div>
	</main>
</div><br>


		 
		</body>
		<script src="js/main.js"></script>
</html>