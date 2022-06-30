<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
   

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.min.css" />
    <!---->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <!--pequeños iconos como en precios-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald|PT+Sans" rel="stylesheet">
    <!--las 3 fuentes que utilizo-->

    <link rel="stylesheet" href="css/colorbox.css">

    <link rel="stylesheet" href="css/mainw.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <!---->
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

                    <h1 class="nombre-sitio">restauran T atro</h1>
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
        <h2>Registro de Usuarios</h2>
        <form id="registro" class="registro" action="validar_registro.php" method="post">
            <div id="datos_usuario" class="registro caja clearfix">
                <!--clases llamadas caja porquwe mas adelante creo varias clases que divide el formulario en distintas partes y cada uno es una caja-->
                <div class="campo">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" placeholder="Tu Nombre">
                </div>
                <div class="campo">
                    <label for="apellido">Apellido:</label>
                    <input type="text" id="apellido" name="apellido" placeholder="Tu Apellido">
                </div>
                <div class="campo">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" placeholder="Tu Email">
                </div>
                <div id="error"></div>
            </div>
            <!--#datos_usuario-->

            <div id="paquetes" class="paquetes">
                <h3>Elige el tipo de pase</h3>
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
                            <div class="orden">
                                <!--CAMBIAR EL LABEL!!!!!!!!!!!!!!!!-->
                                <label for="pase_musica">Pases deseados:</label>
                                <input type="number" min="0" id="pase_musica" size="3" name="boletos[]"
                                    placeholder="0"> <!-- name="boletos[un_dia][cantidad]-->
                              <!--  <input type="hidden" value="30" name="boletos[un_dia][precio]">-->
                            </div>
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
                            <div class="orden">
                                <label for="pase_teatro">Pases deseados:</label>
                                <input type="number" min="0" id="pase_teatro" size="3"
                                    name="boletos[]" placeholder="0"> <!--name="boletos[completo][cantidad]" -->
                                  <!-- <input type="hidden" value="50" name="boletos[completo][precio]">-->
                            </div>
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
                            <div class="orden">
                                <label for="pase_tematica">Pases deseados:</label>
                                <input type="number" min="0" id="pase_tematica" size="3" name="boletos[]"
                                    placeholder="0"> <!-- name="boletos[2dias][cantidad]"-->
                                 <!-- <input type="hidden" value="45" name="boletos[2dias][precio]">-->
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!--#paquetes-->













 
            <!--A MANO-->
            <div id="eventos" class="eventos clearfix">
                <h3>Elige tus pases</h3>
                <div class="caja">

                <div id="musica" class="contenido-dia clearfix">
                    <h4>Música</h4>
                        <div>
                            <p>Viernes</p>
                            <label><input type="checkbox" name="registro[]" id="musica_01"
                                    value="musica_01"><time>12:00</time> Clásica: Arpa</label>
                            <label><input type="checkbox" name="registro[]" id="musica_02"
                                    value="musica_02"><time>14:00</time> Jazz y Blues</label>
                            <label><input type="checkbox" name="registro[]" id="musica_03"
                                    value="musica_03"><time>16:00</time> Flamenco</label>
                            <label><input type="checkbox" name="registro[]" id="musica_04"
                                    value="musica_04"><time>18:00</time> Clasica: Piano</label>
                            <label><input type="checkbox" name="registro[]" id="musica_05"
                                    value="musica_05"><time>20:00</time> The Beatles</label>
                        </div>
                        <div>
                            <p>Sabado</p>
                            <label><input type="checkbox" name="registro[]" id="musica_06"
                                    value="musica_06"><time>12:00</time> Indie</label>
                            <label><input type="checkbox" name="registro[]" id="musica_07"
                                    value="musica_07"><time>14:00</time> Familia de percusión</label>
                            <label><input type="checkbox" name="registro[]" id="musica_08"
                                    value="musica_08"><time>16:00</time> Flamenco</label>
                            <label><input type="checkbox" name="registro[]" id="musica_09"
                                    value="musica_09"><time>18:00</time> Pop-Rock</label>
                            <label><input type="checkbox" name="registro[]" id="musica_10"
                                    value="musica_10"><time>20:00</time> Abba</label>
                        </div>
                        <div>
                            <p>Domingo</p>
                            <label><input type="checkbox" name="registro[]" id="musica_11"
                                    value="musica_11"><time>12:00</time> Flamenco</label>
                            <label><input type="checkbox" name="registro[]" id="musica_12"
                                    value="musica_12"><time>14:00</time> Pop</label>
                            <label><input type="checkbox" name="registro[]" id="musica_13"
                                    value="musica_13"><time>16:00</time> Familia de percusión</label>
                            <label><input type="checkbox" name="registro[]" id="musica_14"
                                    value="musica_14"><time>18:00</time> Familia de viento</label>
                            <label><input type="checkbox" name="registro[]" id="musica_15"
                                    value="musica_15"><time>20:00</time> Vetusta Morla</label>
                        </div>
                 </div>
                <!--#musica-->

                 <div id="teatro" class="contenido-dia clearfix"> 
                    <h4>Teatro</h4>
                        <div>
                            <p>Viernes</p>
                            <label><input type="checkbox" name="registro[]" id="teatro_01" value="teatro_01"><time>13:00</time>
                            Comedia: Burundanga</label>
                            <label><input type="checkbox" name="registro[]" id="teatro_02" value="teatro_02"><time>15:00</time>
                            Drama: Ser o no ser</label>
                            <label><input type="checkbox" name="registro[]" id="teatro_03" value="teatro_03"><time>20:00</time>
                            Comedia: Pareja abierta</label>
                            <label><input type="checkbox" name="registro[]" id="teatro_04" value="teatro_04"><time>22:00</time>
                            Monólogo: El premio</label>
                        </div>
                        <div>
                            <p>Sabado</p>
                            <label><input type="checkbox" name="registro[]" id="teatro_05" value="teatro_05"><time>13:00</time>
                            Comedia: Viviendo juntos</label>
                            <label><input type="checkbox" name="registro[]" id="teatro_06" value="teatro_06"><time>15:00</time>
                            Psicológico: Pentematicaos</label>
                            <label><input type="checkbox" name="registro[]" id="teatro_07" value="teatro_07"><time>20:00</time>
                            Monólogo: un negocio rentable</label>
                            <label><input type="checkbox" name="registro[]" id="teatro_08" value="teatro_08"><time>22:00</time>
                            Show de Magia</label>
                        </div>
                        <div>
                            <p>Domingo</p>
                            <label><input type="checkbox" name="registro[]" id="teatro_09" value="teatro_09"><time>13:00</time>
                            Show de Magia</label>
                            <label><input type="checkbox" name="registro[]" id="teatro_10" value="teatro_10"><time>15:00</time>
                            Comedia: ¿Con que lenguaje debo empezar?</label>
                            <label><input type="checkbox" name="registro[]" id="teatro_11" value="teatro_11"><time>20:00</time>
                            Drama: Método Grönholm</label>
                            <label><input type="checkbox" name="registro[]" id="teatro_12" value="teatro_12"><time>22:00</time>
                            Drama: Entre copas</label>
                        </div>
                    </div>
                <!--#teatro-->

                <div id="tematica" class="contenido-dia clearfix"> 
                    <h4>Temática</h4>
                        <div>
                            <p>Viernes</p>
                            <label><input type="checkbox" name="registro[]" id="tematica_01" value="tematica_01"><time>22:00</time>
                            Terror</label>
                            <label><input type="checkbox" name="registro[]" id="tematica_02" value="tematica_02"><time>14:00</time>
                            En Hawaii</label>
                            <label><input type="checkbox" name="registro[]" id="tematica_03" value="tematica_03"><time>22:00</time>
                            Su majestad</label>
                        </div>
                        <div>
                            <p>Sabado</p>
                            <label><input type="checkbox" name="registro[]" id="tematica_04" value="tematica_04"><time>14:00</time>
                            3D</label>
                            <label><input type="checkbox" name="registro[]" id="tematica_05" value="tematica_05"><time>14:00</time>
                            Su majestad</label>
                            <label><input type="checkbox" name="registro[]" id="tematica_06" value="tematica_06"><time>22:00</time>
                            Terror</label>
                            <label><input type="checkbox" name="registro[]" id="tematica_07" value="tematica_07"><time>22:00</time>
                            Sensaciones</label>
                        </div>
                        <div>
                            <p>Domingo</p>
                            <label><input type="checkbox" name="registro[]" id="tematica_08" value="tematica_08"><time>14:00</time>
                            Su majestad</label>
                            <label><input type="checkbox" name="registro[]" id="tematica_09" value="tematica_09"><time>14:00</time>
                            3D</label>
                            <label><input type="checkbox" name="registro[]" id="tematica_10" value="tematica_10"><time>20:00</time>
                            Terror</label>
                            <label><input type="checkbox" name="registro[]" id="tematica_11" value="tematica_11"><time>20:00</time>
                            Hawaii</label>
                        </div>
                </div>
            <!--#tematica-->
            </div>
            <!--.caja-->
            </div>
            <!--#eventos-->






            <div id="resumen" class="resumen">
                <h3>Pago y Extras</h3>
                <div class="caja clearfix">
                    <div class="extras">
                        <div class="orden">
                            <label for="camisa_evento">Camiseta 10€ <small>(promocion 25% dto.)</small></label>
                            <input type="number" min="0" id="camisa_evento" name="pedido_extra[camisas][cantidad]"
                                size="3" placeholder="0">
                            <!--<input type="hidden" value="10" name="pedido_extra[camisas][precio]">  name="pedido_extra[camisas][precio]"-->
                        </div>
                        <!--.orden-->
                        <div class="orden">
                            <label for="etiquetas">Paquete de 10 etiquetas 2€ <small>(cualquier evento)</small></label>
                            <input type="number" min="0" id="etiquetas" name="pedido_extra[etiquetas][cantidad]"
                                size="3" placeholder="0">
                           <!-- <input type="hidden" value="2" name="pedido_extra[etiquetas][precio]"> <!--name="pedido_extra[etiquetas][precio]"-->
                        </div>
                        <!--.orden-->
                        <div class="orden">
                            <label for="regalo">Seleccione un regalo</label> <br>
                            <select id="regalo" name="regalo" required>
                                <option value="">- Seleccione un regalo -</option>
                                <option value="2">Etiquetas</option> <!--numero en relacion con la bbdd-->
                                <option value="1">Pulsera</option>
                                <option value="3">Sorpresa</option>
                            </select>
                        </div>
                        <!--.orden-->

                        <input type="button" id="calcular" class="button" value="Calcular">
                    </div>
                    <!--.extras-->

                    <div class="total">
                        <p>Resumen:</p>
                        <div id="lista-productos">

                        </div>
                        <p>Total:</p>
                        <div id="suma-total">

                        </div>
                        <input type="hidden" name="total_pedido" id="total_pedido"> <!--hidden para wue esten ocultos y no se vean en html-->
                        <input type="hidden" name="total_descuento" id="total_descuento" value="total_descuento">
                        <input id="btnRegistro" type="submit" name="submit" class="button" value="Pagar">
                    </div>
                    <!--.total-->
                </div>
                <!--.caja-->
            </div>
            <!--#resumen-->

        </form>
    </section>











    <footer class="site-footer">
        <div class="contenedor clearfix">
            <div class="footer-informacion">
                <h3>Sobre <span>restauran T atro</span></h3>
                <p>5.800 metros cuadrados de ocio, espectáculo y gastronomía para despertar los sentidos de quienes vienen a nuestro establecimiento a olvidarse de la semana.</p>

            </div>
            <div class="ultimos-tweets">
                <h3>Últimos <span>tweets</span></h3>
                <a class="twitter-timeline" data-height="400" data-theme="light" data-link-color="#fe4918"
                    href="https://twitter.com/ReyLeonMusical?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor">Tweets
                    by Rebeca</a>
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

    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery-animateNumber/0.0.14/jquery.animateNumber.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lettering.js/0.7.0/jquery.lettering.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.colorbox/1.6.4/jquery.colorbox-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="js/mainw.js"></script>
    
    






  