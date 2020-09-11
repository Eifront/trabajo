<?php
  include("conexion.php");
  include("conexion2.php");
  $idcliente = 04
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eifront Store Games</title>
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet"> 
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>
    <header>
        <nav>
            <section class="contenedor nav">
                <div class="logo">
                    <img src="imgjuegos/IconoEifront2.jpg" alt="">
                </div>
                <div class="enlaces-header">
                    <a href="#">Inicio</a>
                    <a href="#">Boosters</a>
                    <a href="#">Blog</a>
                    <a href="#">Centro de ayuda</a>
                    <a href="paglogin.php">Login</a>
                </div>
                <div class="hamburguer">
                    <i class="fas fa-bars"></i>
                </div>
            </section>
        </nav>
        <div class="contenedor">
            <section class="contenido-header">
                <section class="textos-header">
                    <h1>Sube Con elo boost</h1>
                    <p>Fácil y rápido, todo lo que necesitas en esta temporada.</p>
                    <a href="Learn more">Leer</a>
                </section>
                <img src="imgjuegos/lol.jpg" alt="">
            </section>
        </div>
    </header>
    <section class="about-us">
        <div class="contenedor1">
            <h2 class="titulo"> Acerca de nuestro trabajo</h2>
            <div class="contenedor-articulo">
                <div class="articulo" data-aos="zoom-in-right">
                    <i class="fas fa-pen-fancy"></i>
                    <h3>Por que trabajamos</h3>
                    <p>Nosotros introdujimos un nuevo estándar en el mundo de los servicios de ELO Boost. Para lograr esto, nosotros nos enfocamos en dos cosas: la calidad y el precio de nuestros servicios. Nosotros hemos bajado nuestros precios hasta el mínimo posible pero al mismo tiempo proporcionamos servicios de alta calidad. </p>
                    <a href="#">Leer mas---></a>
                </div>
                <div class="articulo" data-aos="zoom-in-right">
                    <i class="fas fa-cog"></i>
                    <h3>Como funciona</h3>
                    <p>Nosotros creemos que la seguridad de primera debe ser un estándar en un servicio en línea como lo es el ELO Boost, y nosotros también consideramos que la seguridad es la obligación más grande que le debemos a nuestros clientes. Para poder alcanzar este nivel de seguridad, hemos tomado numerosas medidas para poder hacer que nuestra página web sea lo más segura posible.</p>
                    <a href="#">Leer mas---></a>
                </div>
                <div class="articulo" data-aos="zoom-in-right">
                    <i class="fas fa-chart-bar"></i>
                    <h3>Equipo profesional de elo boost</h3>
                    <p>Nosotros pusimos un gran énfasis en formar al equipo de Eifront. Este consiste de reconocidos y confiables ELO Boosters que han tenido previa experiencia realizando ELO Boost. Estos jugadores de primera verán tu compra como un trabajo profesional, y ellos tratarán de completar tu orden lo más rápido posible.</p>
                    <a href="#">Leer mas---></a>
                </div>
                <div class="articulo" data-aos="zoom-in-right">
                    <i class="fas fa-comments"></i>
                    <h3>Comentarios</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Libero reiciendis nisi ratione unde ab eveniet qui numquam neque. Optio, dolorum!</p>
                    <a href="#">Leer mas---></a>
                </div>
            </div>
        </div>
    </section>
    <section class=" questions contenedor">
            <section class="textos-questions">
                <h1>Sube rapido tus ligas</h1>
                <p>La mejor experiencia de elo boost en internet</p>
                <a href="#">Leer mas</a>
            </section>
            <img src="imgjuegos/ligaslol.jpg" alt="" data-aos="zoom-out-up" data-aos-duration="2000">
    </section>


    <section class="results">
        <div class="contenedor1 conten-results">
            <section class="numbers">

                <div class="number" data-aos="zoom-in-left">
                    <h4>Hierro 1-4</h4>
                    <p>Solo puede entrar en cola con jugadores de grado Hierro, Bronce y Plata.</p>
                    <?php
                      $conectarBD2 = Conectar();
                      $Query = "SELECT totalfact FROM facturaliga WHERE id_cliente = $idcliente ";
                      if($relsult = $conectarBD2->query($Query))
                      {
                          while($recortodo = $relsult->fetch_assoc())
                          {
                              echo"<p>".'En dolares = $ '.$recortodo{'totalfact'}."</p>";
                          }
                      }
                    ?>
                </div>
                <div class="number" data-aos="zoom-in-left">
                    <h4>Bronce 1-4</h4>
                    <p>Solo puede entrar en cola con jugadores de grado Hierro, Bronce y Plata.</p>
                <?php
                      $conectarBD2 = Conectar();
                      $Query = "SELECT totalfact,id_cliente,id_facturaliga FROM facturaliga WHERE id_cliente = $idcliente ";
                      if($relsult = $conectarBD2->query($Query))
                      {
                          while($recortodo = $relsult->fetch_assoc())
                          {
                              echo"<p>".'En dolares = $ '.$recortodo{'totalfact'}."</p>";
                              echo"<p>".'El usuario es:  '.$recortodo{'id_cliente'}."</p>";
                              echo"<p>".'Factura: '.$recortodo{'id_facturaliga'}."</p>";
                          }
                      }
                    ?>
                </div>
                <div class="number" data-aos="zoom-in-left">
                    <h4>Plata 1-4</h4>
                    <p>Solo puede entrar en cola con jugadores de grado Hierro, Bronce, Plata y Oro.</p>
                    <?php
                      $conectarBD2 = Conectar();
                      $Query = "SELECT id_facturaliga,fechafact FROM facturaliga";
                      if($relsult = $conectarBD2->query($Query))
                      {
                          while($recortodo = $relsult->fetch_assoc())
                          {
                              echo"<p>".'Factura # '.$recortodo{'id_facturaliga'}.', Fecha: '.$recortodo{'fechafact'}."</p>";
                          }
                      }
                    ?>
                </div><div class="number" data-aos="zoom-in-left">
                    <h4>Oro 1-4</h4>
                    <p>Solo puede entrar en cola con jugadores de grado Plata, Oro y Platino.</p>
                    <?php
                      $conectarBD2 = Conectar();
                      $Query = "SELECT nombre FROM cliente WHERE id_cliente = $idcliente";
                      if($relsult = $conectarBD2->query($Query))
                      {
                          while($recortodo = $relsult->fetch_assoc())
                          {
                              echo"<p>".'Cliente: '.$recortodo{'nombre'}."</p>";
                          }
                      }
                    ?>
                </div>
                <div class="number"data-aos="zoom-in-left" >
                    <h4>Platino 1-4</h4>
                    <p>Solo puede entrar en cola con jugadores de grado Oro, Platino o Diamante que estén dos divisiones arriba de ellos como máximo</p>
                    <?php
                      $conectarBD2 = Conectar();
                      $Query = "SELECT totalfact FROM facturaliga";
                      if($relsult = $conectarBD2->query($Query))
                      {
                          while($recortodo = $relsult->fetch_assoc())
                          {
                              echo"<p>".'En dolares = $ '.$recortodo{'totalfact'}."</p>";
                          }
                      }
                    ?>
                </div>
                <div class="number" data-aos="zoom-in-left">
                    <h4>Diamante 1-4</h4>
                    <p>Puede entrar en cola con 2 divisiones superiores o inferiores (es decir, Diamante IV puede entrar en cola con Platino I, II y Diamante II, III, etc.).</p>
                    <?php
                      $conectarBD2 = Conectar();
                      $Query = "SELECT totalfact FROM facturaliga";
                      if($relsult = $conectarBD2->query($Query))
                      {
                          while($recortodo = $relsult->fetch_assoc())
                          {
                              echo"<p>".'En dolares = $ '.$recortodo{'totalfact'}."</p>";
                          }
                      }
                    ?>
                </div>
            </section>
            <section class="results-text">
                <h5>Estan son las ligas con sus divisiones</h5>
                <p>Actualmente estas son las ligas que nuestros boosters te ofrecen</p>
                <a href="">Ingresar Aqui</a>
            </section>
        </div>
    </section>

    <section class="contenedor1 services">
        <img src="imgjuegos/morgana.jpg" alt="" data-aos="zoom-out-right" data-aos-duration="3000">
        <div class="box-skills">
            <h4><i class="far fa-check-circle"></i> Victoria en clasificatoria</h4>
            <h4><i class="far fa-check-circle"></i> Boost De Liga</h4>
            <h4><i class="far fa-check-circle"></i> Maestria de campeon</h4>
            <h4><i class="far fa-check-circle"></i> Partidas De Posicionamiento</h4>
        </div>
    </section>

    <footer>
        <div class="partFooter">
            <img src="imgjuegos/Eifront.png" alt="">
        </div>
        <div class="partFooter">
            <h4>Servicios</h4>
            <a href="#">Boosting</a>
            <a href="#">Leveling</a>
            <a href="#">Maestria</a>
        </div>
        <div class="partFooter">
            <h4>Acerca de</h4>
            <a href="#">Condiciones de uso</a>
            <a href="#">Politica De Privacidad</a>
            <a href="#">Partners</a>
        </div>
        <div class="partFooter">
            <h4>Redes Sociales</h4>
            <div class="social-media">
                <i class="fab fa-facebook-f">    facebook.com/fjgrijalba</i>
                <i class="fab fa-twitter">    twitter.com/fj_grijalba</i>
                <i class="fab fa-instagram">    instagram.com/fj_grijalba</i>
                <i class="fab fa-youtube">   Francisco Grijalba</i>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://kit.fontawesome.com/2cde065caf.js" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
    

    <?php
     $llamarBD = Conectar();
     $llamarBD -> close();
    ?>

</body>
</html>