<?php
    /* Template Name: Principal */ 
    get_header();
?>

    <section id="servicio-express">
        <div class="contenedor">
            <div class="flex">
                <div class="columna align-self-center">
                    <div class="informacion">
                        <h1>Mensajeria Express en Cuernavaca</h1>
                        <p>¿Se te olvido?...<span class="cursiva">¡Te lo llevamos!</span></p>

                        <a class="boton azul" href="#contacto">¡ME INTERESA!</a>
                    </div>
                </div>
                <div class="columna">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/hombre-entrega.png" alt="Hombre de entrega">
                </div>
            </div>
        </div>

    </section>

    <section id="ideologia" class="template-section padding-100">
        <div class="contenedor">
            <h2>IDEOLOGÍA</h2>
            <p>Somos una empresa comprometida en ofrecer soluciones de mensajería y compras para negocios, oficinas, restaurantes, hoteles, hospitales, farmacias, laboratorios y toda persona que necesite un servicio.</p>


            <div class="flex triple">
                <div class="columna">
                    <div class="icono">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/iconos/moto.png" alt="Símbolo de motocicleta">
                    </div>


                    <div class="cuadroGris">
                        <h3>MISIÓN</h3>
                        <p>Resolver de manera rápida y eficiente sus necesidades de mensajería y compras, para poder hacer de ellas de una manera más rápida o segura.</p>
                    </div>
                </div>

                <div class="columna">
                    <div class="icono">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/iconos/corazon.png" alt="Símbolo de corazón">
                    </div>


                    <div class="cuadroGris">
                        <h3>VALORES</h3>
                        <p>Honestidad, eficiencia, seguri-dad, responsabilidad, rapidez.</p>
                    </div>
                </div>

                <div class="columna">
                    <div class="icono">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/iconos/monedas.png" alt="Símbolo de monedas">
                    </div>


                    <div class="cuadroGris">
                        <h3>BENEFICIOS</h3>
                        <p>Bajos costos, rapidez, seguridad, localización de tiempo real de tus envíos.</p>
                    </div>
                </div>
            </div>

        </div>



    </section>

    <section id="servicios" class="template-section padding-50">

        <h2>SERVICIOS</h2>
        <hr>
        <div class="contenedor">

            <div class="flex">
                <div class="columna">
                       <div class="servicio flex">
                           <div class="columna">
                               <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/iconos/diablo.png" alt="diablito">
                           </div>
                           <div class="columna">
                                <p>DISTRIBUCIÓN</p>
                           </div>
                       </div>
                       
                       <div class="servicio flex">
                           <div class="columna">
                               <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/iconos/personas.png" alt="persona entregando paquete">
                           </div>
                           <div class="columna">
                                <p>RECOLECCIÓN A DOMICILIO</p>
                           </div>
                       </div>
                </div>
                <div class="columna">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/motoEntrega.jpg" alt="motocicleta de entrega De Volada">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/sombraMotoEntrega.png" alt="sombra de motocicleta">
                </div>
            </div>
        </div>
    </section>


    <section id="mensajeria" class="template-section padding-50">
        <div class="contenedor">
            <h2>BENEFICIOS DE NUESTRO SERVICIO DE MENSAJERÍA</h2>
            <div class="flex">
                <div class="columna">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/iconos/s-express.png" alt="camión rápido">
                    <p>SERVICIO EXPRESS</p>
                </div>
                <div class="columna">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/iconos/calendario.png" alt="calendario">
                    <p> ENTREGAS EL MISMO DÍA</p>
                </div>
                <div class="columna">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/iconos/reloj.png" alt="reloj y calendario">
                    <p>ENTREGAS PROGRAMADAS</p>
                </div>
                <div class="columna">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/iconos/masivos.png" alt="bodega llena de paquetes">
                    <p>ENVÍOS MASIVOS</p>
                </div>
                <div class="columna">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/iconos/especializadas.png" alt="paquete sobre mano">
                    <p>ENTREGAS ESPECIALIZADAS</p>
                </div>
            </div>
        </div>

    </section>

    <section id="restaurantes" class="template-section">
        <div class="contenedor">
            <h2>MENSAJERIA PARA RESTAURANTES</h2>            
        </div>
    </section>

    <section id="contacto" class="template-section padding-50">
        <div class="contenedor">
            <h2>Contacto</h2>
            [caldera_form id="CF5ac5031511407"]
        </div>
    </section>

    

    <?php 
    get_footer();
?>
