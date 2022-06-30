<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
   

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css" /><!---->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" /><!--pequeños iconos como en precios-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans" rel="stylesheet"> <!--las 3 fuentes que utilizo-->

    <link rel="stylesheet" href="css/colorbox.css"> <!--colorbox-->
    
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.8.0/dist/leaflet.css"
    integrity="sha512-hoalWLoI8r4UszCkZ5kL8vayOGVae1oxXe/2A4AO6J9+580uKHDO3JdHb7NzwwzK5xr/Fs0W40kiNHxM9vyTtQ=="
    crossorigin=""/>

    <link rel="stylesheet" href="css/mainw.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script><!---->
</head>

<body class="index">
    



    <header class="site-header">
        <div class="hero">
            <div class="contenido-header">
                <nav class="redes-sociales">
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </nav>
                <div class="informacion-evento">
                    <div class="clearfix">
                        <p class="fecha"><i class="fa fa-calendar" aria-hidden="true"></i> ¡Estrenamos en verano!</p>
                        <p class="ciudad"><i class="fa fa-map-marker" aria-hidden="true"></i> Sevilla, España</p>
                    </div>

                    <h1 class="nombre-sitio">restauran  T  atro</h1>
                    <p class="slogan">El <span>mejor lugar</span> para disfrutar</p>
                </div>
                <!--.informacion-evento-->

            </div>
        </div>
        <!--.hero-->
    </header>


    <div class="barra">
        <div class="contenedor clearfix">
            <div class="logo">
                <a href="index.php">
                        <img src="img/logo_.svg" alt="logo">
                    </a>
            </div>

            <div class="menu-movil">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <nav class="navegacion-principal clearfix">
                <a href="galeria.php">Imágenes</a>
                <a href="calendario.php">Calendario</a>
                <a href="invitados.php">Invitados</a>
                <a href="registro_reservas.php">Reservas</a>
            </nav>
        </div>
        <!--.contenedor-->
    </div>

    <!--.barra-->





    
    <section class="seccion contenedor">
        <h2>Una experiencia inolvidable</h2>
        <p>
        Un espacio donde la alta gastronomía se cita con el mejor espectáculo de la ciudad. Un espacio versátil donde dar rienda suelta al entretenimiento y la diversión; en familia, pareja o con amigos; un viernes después del trabajo o un domingo a la hora del vermut.

        </p>
    </section>
    <!--seccion-->

    <section class="programa">
        <div class="contenedor-video">
           <!-- <video width="900" height="700" src="video/restaurant_video.mp4" autoplay muted loop></video> -->
           <video src="video/restaurant_video.mp4" autoplay muted loop></video>
        </div>
        <!--.contenedor-video-->


        <div class="contenido-programa">
            <div class="contenedor">
                <div class="programa-evento">
                    <h2>ULTIMAS NOVEDADES</h2>


                    <nav class="menu-programa">
                        <a >
                                      <i class="fa fa-university" aria-hidden="true"></i> Música                                </a>
                        <a >
                                      <i class="fa fa-comment" aria-hidden="true"></i> Teatro                                </a>
                        <a >
                                      <i class="fa fa-code" aria-hidden="true"></i> Temática                                </a>
                        <a >
                                      <i class="fa fa-comments" aria-hidden="true"></i> Monólogo                                </a>
                    </nav>
            


            <!--para poner de manera manual las que yo quiero-->
                    <div id="seminario" class="info-curso ocultar clearfix">
                        <div class="detalle-evento">
                            <h3>Musica clásica: Arpa</h3>
                            <p><i class="fa fa-clock-o" aria-hidden="true"></i> 12:00:00</p>
                            <p><i class="fa fa-calendar" aria-hidden="true"></i> 2022-07-01</p>
                            <p><i class="fa fa-user" aria-hidden="true"></i> Rafael Bautista</p>
                        </div>
                        <div class="detalle-evento">
                            <h3>Temática: en Hawaii</h3>
                            <p><i class="fa fa-clock-o" aria-hidden="true"></i> 14:00:00</p>
                            <p><i class="fa fa-calendar" aria-hidden="true"></i> 2022-07-01</p>
                            <p><i class="fa fa-user" aria-hidden="true"></i> Sussan Sanchez</p>
                        </div>
                        <div class="detalle-evento">
                            <h3>Temática: Terror</h3>
                            <p><i class="fa fa-clock-o" aria-hidden="true"></i> 22:00:00</p>
                            <p><i class="fa fa-calendar" aria-hidden="true"></i> 2022-07-01</p>
                            <p><i class="fa fa-user" aria-hidden="true"></i> Sussan Sanchez</p>
                        </div>
                        <a href="calendario.php" class="button float-right">Ver todos</a>
                    </div>
                    <!--#talleres-->

                
                </div>
                <!--.programa-evento-->
            </div>
            <!--.contenedor-->
        </div>
        <!--.contenido-programa-->
    </section>
    <!--.programa-->



    <section class="invitados contenedor seccion">
        <h2>Nuestros invitados</h2>
        <ul class="lista-invitados clearfix">
            <li>
                <div class="invitado">
                    <a class="invitado-info" href="#invitado1">
                                         <img src="img/invitados/invitado1.jpg" alt="Imagen invitado">
                                         <p>Rafael  Bautista</p>
                                     </a>
                </div>
                <!-- END .invitado -->
            </li>

            <div style="display:none;">

                <div class="invitado-info" id="invitado1">
                    <h2>Rafael </h2>
                    <img src="img/invitados/invitado1.jpg" alt="">
                    <p>Praesent rutrum efficitur pharetra. Vivamus scelerisque pretium velit, id tempor turpis pulvinar et. Ut bibendum finibus massa non molestie.</p>
                </div>

            </div>


            <li>
                <div class="invitado">
                    <a class="invitado-info" href="#invitado2">
                                         <img src="img/invitados/invitado2.jpg" alt="Imagen invitado">
                                         <p>Shari Herrera</p>
                                     </a>
                </div>
                <!-- END .invitado -->
            </li>

            <div style="display:none;">

                <div class="invitado-info" id="invitado2">
                    <h2>Shari</h2>
                    <img src="img/invitados/invitado2.jpg" alt="">
                    <p>Curabitur urna metus, placerat gravida lacus ut, lacinia congue orci. Maecenas luctus mi at ex blandit vehicula. Morbi porttitor tempus euismod.</p>
                </div>

            </div>


            <li>
                <div class="invitado">
                    <a class="invitado-info" href="#invitado3">
                                         <img src="img/invitados/invitado3.jpg" alt="Imagen invitado">
                                         <p>Juan Sanchez</p>
                                     </a>
                </div>
                <!-- END .invitado -->
            </li>

            <div style="display:none;">

                <div class="invitado-info" id="invitado3">
                    <h2>Juan</h2>
                    <img src="img/invitados/invitado3.jpg" alt="">
                    <p>placerat gravida lacus ut, lacinia congue orci. Maecenas luctus mi at ex blandit vehicula. Morbi porttitor tempus euismod.</p>
                </div>

            </div>


            <li>
                <div class="invitado">
                    <a class="invitado-info" href="#invitado4">
                                         <img src="img/invitados/invitado4.jpg" alt="Imagen invitado">
                                         <p>Susana Rivera</p>
                                     </a>
                </div>
                <!-- END .invitado -->
            </li>

            <div style="display:none;">

                <div class="invitado-info" id="invitado4">
                    <h2>Susana</h2>
                    <img src="img/invitados/invitado4.jpg" alt="">
                    <p>Praesent rutrum efficitur pharetra. Vivamus scelerisque pretium velit, id tempor turpis pulvinar et. Ut bibendum finibus</p>
                </div>

            </div>


            <li>
                <div class="invitado">
                    <a class="invitado-info" href="#invitado5">
                                         <img src="img/invitados/invitado5.jpg" alt="Imagen invitado">
                                         <p>Harold Garcia</p>
                                     </a>
                </div>
                <!-- END .invitado -->
            </li>

            <div style="display:none;">

                <div class="invitado-info" id="invitado5">
                    <h2>Harold</h2>
                    <img src="img/invitados/invitado5.jpg" alt="">
                    <p>placerat gravida lacus ut, lacinia congue orci. Maecenas luctus mi at ex blandit vehicula. Morbi porttitor tempus euismod.</p>
                </div>

            </div>


            <li>
                <div class="invitado">
                    <a class="invitado-info" href="#invitado6">
                                         <img src="img/invitados/invitado6.jpg" alt="Imagen invitado">
                                         <p>Susan Sanchez</p>
                                     </a>
                </div>
                <!-- END .invitado -->
            </li>

            <div style="display:none;">

                <div class="invitado-info" id="invitado6">
                    <h2>Susan</h2>
                    <img src="img/invitados/invitado6.jpg" alt="">
                    <p>Praesent rutrum efficitur pharetra. Vivamus scelerisque pretium velit, id tempor turpis pulvinar et. Ut bibendum finibus massa non molestie. Curabitur urna metus, placerat gravida lacus ut, lacinia congue orci. Maecenas luctus mi at
                        ex blandit vehicula. Morbi porttitor tempus euismod.</p>
                </div>

            </div>


        </ul>
        <!-- END lista-invitados -->
    </section>
    <!-- END .invitados -->

    <div class="contador parallax">
        <div class="contenedor">
            <ul class="resumen-evento clearfix"><!--clearfix para alinear hacia izq flotando unos con otros-->
                <li>
                    <p class="numero">6</p> Invitados</li>
                <li>
                    <p class="numero">30</p> Shows</li>
                <li>
                    <p class="numero">6</p> Salas</li>
                <li>
                    <p class="numero">5</p> Temáticas</li>

            </ul>
        </div>
    </div>

    <section class="precios seccion">
        <h2>Precios</h2>
        <div class="contenedor">
            <ul class="lista-precios clearfix">
                <li>
                    <div class="tabla-precio">
                        <h3>MÚSICA</h3>
                        <p class="numero">25€</p>
                        <ul>
                            <li>Menú</li>
                            <li>Tiempo max: 1:30h</li>
                            <li>Show en vivo</li>
                            <li>Invitado sorpresa</li>
                        </ul>
                        <a href="registro_reservas.php" class="button hollow">VER</a>
                    </div>
                </li>
                <li>
                    <div class="tabla-precio">
                        <h3>TEATRO</h3>
                        <p class="numero">35€</p>
                        <ul>
                            <li>Menú</li>
                            <li>Tiempo max: 2h</li>
                            <li>Show en vivo</li>
                            <li>Invitado sorpresa</li>
                        </ul>
                        <a href="registro_reservas.php" class="button ">VER</a>
                    </div>
                </li>

                <li>
                    <div class="tabla-precio">
                        <h3>TEMÁTICA</h3>
                        <p class="numero">50€</p>
                        <ul>
                            <li>Menú</li>
                            <li>Tiempo: 3h</li>
                            <li>Inmersivo 360º</li>
                            <li>Invitado sorpresa</li>
                        </ul>
                        <a href="registro_reservas.php" class="button hollow">VER</a>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!--precios-->

    <div id="mapa" class="mapa"></div>
    <script>
        //MAPA LEAFLET
        (function(){
            "use strict";

            document.addEventListener('DOMContentLoaded', function(){
            var map = L.map('mapa').setView([37.386663, -5.983327], 13);
    
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
            }).addTo(map);
    
            L.marker([37.386663, -5.983327]).addTo(map)
               /* .bindPopup('restauran T atro')
                .openPopup()*/ /*una opcion*/ 
                .bindTooltip('restauran T atro')
                .openTooltip();
            }); //DOM CONTENT LOADED
        })();
    </script>
    <!--mapa-->

    <section class="seccion">
        <h2>OPINIONES</h2>
        <div class="testimoniales contenedor clearfix">
            <div class="testimonial">
                <blockquote>
                    <p>Sed mollis velit sit amet det le felis condimentum ultrices. Fusce vehicula ut sem vitae semper. Nullam blandit neque eu semper ullamcorper. Duis commodo quam in orci condimentum ultricies.
                        <p>
                            <footer class="info-testimonial clearfix">
                                <img src="img/testimonial.jpg" alt="imagen testimonial">
                                <cite>Ignacio Alonso <span>DevSecOps en @Viewnext</span></cite>
                            </footer>
                </blockquote>
            </div>
            <!--.opinion-->
            <div class="testimonial">
                <blockquote>
                    <p>Sed mollis velit sit amet det le felis condimentum ultrices. Fusce vehicula ut sem vitae semper. Nullam blandit neque eu semper ullamcorper. Duis commodo quam in orci condimentum ultricies.
                        <p>
                            <footer class="info-testimonial clearfix">
                                <img src="img/testimonial.jpg" alt="imagen testimonial">
                                <cite>RICARDO GUTIÉRREZ <span>Enfermero en Hospital Macarena</span></cite>
                            </footer>
                </blockquote>
            </div>
            <!--.opinion-->
            <div class="testimonial">
                <blockquote>
                    <p>Sed mollis velit sit amet det le felis condimentum ultrices. Fusce vehicula ut sem vitae semper. Nullam blandit neque eu semper ullamcorper. Duis commodo quam in orci condimentum ultricies.
                        <p>
                            <footer class="info-testimonial clearfix">
                                <img src="img/testimonial.jpg" alt="imagen testimonial">
                                <cite>MANUEL FONTÁN <span>Tutor en @Guadaltel</span></cite>
                            </footer>
                </blockquote>
            </div>
            <!--.opinion-->
        </div>
    </section>
    <!--.opiniones-->

    <div class="newsletter parallax">
        <div class="contenido contenedor">
            <p> regístrate al newsletter:</p>
            <h3>restauran T atro</h3>
            <a href="#mc_embed_signup" class="boton_newsletter button transparente">Registro</a>
        </div>
        <!--.contenido-->
    </div>
    <!--.newsletter-->
                    <!-- Begin Mailchimp Signup Form -->
                    <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7_dtp.css" rel="stylesheet" type="text/css">
                    <style type="text/css">
                        #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif;  width:100%;}
                        /* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
                        We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                    </style>

                    <div style="display:none;">
                    <div id="mc_embed_signup" >
                    <form action="https://cedeu.us9.list-manage.com/subscribe/post?u=b3cba539ed6f224f1f8c10486&amp;id=edde9c1328" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                        <div id="mc_embed_signup_scroll">
                        <h2>Subscribete</h2>
                    <div class="mc-field-group">
                        <label for="mce-FNAME">Nombre </label>
                        <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
                    </div>
                    <div class="indicates-required"><span class="asterisk">*</span> es obligatorio</div>
                    <div class="mc-field-group">
                        <label for="mce-EMAIL">Correo electrónico   <span class="asterisk">*</span>
                    </label>
                        <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                    </div>
                        <div id="mce-responses" class="clear foot">
                            <div class="response" id="mce-error-response" style="display:none"></div>
                            <div class="response" id="mce-success-response" style="display:none"></div>
                        </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_b3cba539ed6f224f1f8c10486_edde9c1328" tabindex="-1" value=""></div>
                            <div class="optionalParent">
                                <div class="clear foot">
                                    <input type="submit" value="Confirmar" name="subscribe" id="mc-embedded-subscribe" class="button">
                                    <p class="brandingLogo"><a href="http://eepurl.com/h1EDPT" title="Mailchimp - email marketing made easy and fun"><img src="https://eep.io/mc-cdn-images/template_images/branding_logo_text_dark_dtp.svg"></a></p>
                                </div>
                            </div>
                        </div>
                    </form>
                    </div>
                    <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[3]='ADDRESS';ftypes[3]='address';fnames[4]='PHONE';ftypes[4]='phone';fnames[5]='BIRTHDAY';ftypes[5]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
                    <!--End mc_embed_signup-->
                    </div>

    <!--mailchimp newsletter-->



    <section class="seccion">
        <h2>cuenta atrás para la inauguración</h2>
        <div class="cuenta-regresiva contenedor">
            <ul class="clearfix">
                <li>
                    <p id="dias" class="numero">90</p> días</li>
                <li>
                    <p id="horas" class="numero">13</p> horas</li>
                <li>
                    <p id="minutos" class="numero">45</p> minutos</li>
                <li>
                    <p id="segundos" class="numero">30</p> segundos</li>
            </ul>
        </div>
    </section>
    <!--.tiempo-->

    <footer class="site-footer">
        <div class="contenedor clearfix">
            <div class="footer-informacion">
                <h3>Sobre <span>restauran T atro</span></h3>
                <p>5.800 metros cuadrados de ocio, espectáculo y gastronomía para despertar los sentidos de quienes vienen a nuestro establecimiento a olvidarse de la semana.</p>
            </div>
            <div class="ultimos-tweets">
                <h3>Últimos <span>tweets</span></h3>
                <a class="twitter-timeline" data-height="400" data-theme="light" data-link-color="#fe4918" href="https://twitter.com/ReyLeonMusical?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">Tweets by Rebeca Gutierrez</a>
                <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            <div class="menu">
                <h3>Redes <span>sociales</span></h3>
                <nav class="redes-sociales">
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                </nav>
            </div>
        </div>

        <p class="copyright">
            Todos los derechos reservados restauran T atro 2022.
        </p>



    </footer>
    <!--footer-->

    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-animateNumber/0.0.14/jquery.animateNumber.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js"></script>
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.7.0/jquery.lettering.min.js"></script>-->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.colorbox/1.6.4/jquery.colorbox-min.js"></script> <!--colorbox-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
   
    <script src="js/mainw.js"></script>
   
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
    integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
    crossorigin=""></script>

    



    