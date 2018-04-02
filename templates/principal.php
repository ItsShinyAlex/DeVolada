<?php
    /* Template Name: Principal */ 
    get_header();
?>

<section id="servicio-express">
    <div class="flex">
        <div class="columna">
            <div class="cuadroAzul">
                <h1>Servicio Express</h1>
                <p>¿Se te olvido?...<span class="cursiva">¡Te lo llevamos!</span></p>
                <button class="transparente">¡LO NECESITO!</button>
            </div>
        </div>
        <div class="columna">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>../img/hombre-entrega.png" alt="Hombre de entrega">
        </div>
    </div>
</section>

<section id="ideologia">
   <div class="flex">
       <h2>IDEOLOGÍA</h2>
       <p>Somos una empresa comprometida en ofrecer soluciones de mensajería y compras para negocios, oficinas, restaurantes, hoteles, hospitales, farmacias, laboratorios y toda persona que necesite un servicio.</p>
   </div>
    <div class="flex 3-col">
        <div class="columna">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>../img/circuloBlanco.png" alt="circulo blanco">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>../img/symbols/moto.png" alt="Símbolo de motocicleta">
            <div class="cuadroGris">
                <h3>MISIÓN</h3>
                <p>Resolver de manera rápida y eficiente sus necesidades de mensajería y compras, para poder hacer de ellas de una manera más rápida o segura.</p>
                <img src="../img/verticalAmbar.png" alt="franja ambar vertical">
                <img src="../img/horizontalAmbar.png" alt="franja ambar horizontal">
            </div>
        </div>
        
        <div class="columna">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>../img/circuloBlanco.png" alt="circulo blanco">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>../img/symbols/corazon.png" alt="Símbolo de corazón">
            <div class="cuadroGris">
                <h3>VALORES</h3>
                <p>Honestidad, eficiencia, seguri-dad, responsabilidad, rapidez.</p>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>../img/verticalAmbar.png" alt="franja ambar vertical">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>../img/horizontalAmbar.png" alt="franja ambar horizontal">
            </div>
        </div>
        
        <div class="columna">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>../img/circuloBlanco.png" alt="circulo blanco">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>../img/symbols/monedas.png" alt="Símbolo de monedas">
            <div class="cuadroGris">
                <h3>BENEFICIOS</h3>
                <p>Bajos costos, rapidez, seguridad, localización de tiempo real de tus envíos.</p>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>../img/verticalAmbar.png" alt="franja ambar vertical">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>../img/horizontalAmbar.png" alt="franja ambar horizontal">
            </div>
        </div>
    </div>
</section>

<section id="servicios">
    <div class="flex">
        <div class="columna">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>../img/marcoAmbar.png" alt="marco ambar">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>../img/symbols/diablo.png" alt="diablito">
            <p>DISTRIBUCIÓN</p>
            <img src="<?php echo get_stylesheet_directory_uri(); ?>../img/marcoAmbar.png" alt="marco ambar">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>../img/symbols/personas.png" alt="persona entregando paquete">
            <p>RECOLECCIÓN A DOMICILIO</p>
        </div>
        <div class="columna">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>../img/motoEntrega.jpg" alt="motocicleta de entrega De Volada">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>../img/sombraMotoEntrega.png" alt="sombra de motocicleta">
        </div>
    </div>
</section>


<section id="mensajeria">
   <h2>MENSAJERÍA</h2>
    <div class="flex">
        <div class="columna">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>../img/symbols/s-express.png" alt="camión rápido">
            <p>SERVICIO EXPRESS</p>
        </div>
        <div class="columna">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>../img/symbols/calendario.png" alt="calendario">
            <p> ENTREGAS EL MISMO DÍA</p>
        </div>
        <div class="columna">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>../img/symbols/reloj.png" alt="reloj y calendario">
            <p>ENTREGAS PROGRAMADAS</p>
        </div>
        <div class="columna">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>../img/symbols/masivos.png" alt="bodega llena de paquetes">
            <p>ENVÍOS MASIVOS</p>
        </div>
        <div class="columna">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>../img/symbols/especializadas.png" alt="paquete sobre mano">
            <p>ENTREGAS ESPECIALIZADAS</p>
        </div>
    </div>
</section>

<section id="restaurantes">
    <div class="flex">
        <h2>RESTAURANTES</h2>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>../img/franjaBlancaHorizontal.png" alt="franja blanca">
    </div>
</section>

<section id="contacto">
    <div class="flex">
        <h2>Contacto</h2>
    </div>
</section>



<?php 
    get_footer();
?>
