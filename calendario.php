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

    <link rel="stylesheet" href="css/colorbox.css">
    
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
        <h2>Calendario de Eventos</h2>

        <div>
        <?php  
            try {
               
                $conn = new mysqli('localhost:3308','root','','proyectofinal'); //conexion

                if($conn->connect_error){
                    echo $error->$conn->connect_error;
                }

                $sql = " SELECT evento_id, nombre, fecha_evento, hora_evento, cat_evento, icono, nombre_invitado, apellido_invitado "; //consulta. Mismos nombres que tablas
                $sql.= " FROM eventos ";
                $sql.= " INNER JOIN  categoria_evento  ";
                $sql.= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
                $sql.= " INNER JOIN invitados ";
                $sql.= " ON eventos.id_inv = invitados.invitado_id ";
                $sql.= " ORDER BY evento_id ";


                $resultado = $conn->query($sql); // se consulta base
            }catch(\Exception $e) {
                echo $e->getMessage();
            }
        
        ?>
 
        <div class="calendario">
            <?php  
            //se imprimen resultados 
              while(   $eventos = $resultado->fetch_assoc() ){  //variable principal que tiene toda la info

                    //obtiene la fecha del evento
                $fecha= $eventos ['fecha_evento'];
                $categoria= $eventos ['cat_evento'];


                $evento =array( //para que se muestren solo estas
                    'titulo'=> $eventos['nombre'],
                    'fecha'=> $eventos['fecha_evento'],
                    'hora'=> $eventos['hora_evento'],
                    'categoria'=> $eventos['cat_evento'],
                    'icono' => 'fa' ." ". $eventos ['icono'], //porque font awesome requiere 2 clases
                    'invitado'=> $eventos['nombre_invitado']. " ". $eventos['apellido_invitado']
                );

                $calendario[$fecha][]= $evento; //para que los eventos se agrupen por fecha
               // $calendario[$fecha][$categoria]= $evento; //para que los eventos se agrupen por fecha y luego por categoria

                ?> 
                    <!-- <?php
                        
                        //echo $eventos ['nombre']
                        // echo "<br>"-
                    ?>-->
                

              <?php } // while de fetch_assoc?> 
              
              <?php
                //imprime todos los eventos CON DISEÑO CSS
                foreach( $calendario as $dia => $lista_eventos){ ?>
                    <h3>
                        <i class=" fa fa-calendar"></i>

                        <?php 
                        setlocale(LC_TIME, 'spanish'); //para que se muestre en español
                                           
                        //para dar formato y muestre las tildes
                        $dateutf= strftime ("%A, %d de %B del %Y", strtotime($dia)); 
                        $dateutf = ucfirst(iconv("ISO-8859-1","UTF-8",$dateutf));
                        echo $dateutf?> 
                    </h3>

                    <?php foreach( $lista_eventos as $evento ){ ?> 
                        <!--PARA DAR ESTILOS-->
                        <div class= "dia">
                            <p class= "titulo"> <?php echo $evento['titulo']; ?> </p>
                            <p class= "hora"> 
                                <i class=" fa fa-clock-o" aria-hidden= "true"></i>
                                <?php echo " ". $evento['fecha']. " - ". $evento['hora']; ?> 
                            </p>
                            <p> 
                                <i class="<?php echo $evento['icono']; ?>" aria-hidden= "true"></i>
                                <?php echo $evento['categoria']; ?>  </p>
                            <p > 
                                <i class=" fa fa-user" aria-hidden= "true"></i><?php echo " ". $evento['invitado']; ?> 
                            </p>


                            <!--<pre>
                            <?php  // var_dump($evento);  ?> para que se vea todo el contenido del array
                            </pre> -->
                        </div>





                    <?php } // fin foreach eventos ?> 
                <?php } //fin foreach de dias ?> 


             
 
            
        
        </div>
        
        <?php  
            $conn->close();
        ?>

       


       

        

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
   
    <script src="https://unpkg.com/leaflet@1.8.0/dist/leaflet.js"
    integrity="sha512-BB3hKbKWOc9Ez/TAwyWxNXeoV9c1v6FIeYiBieIWkpLjauysF18NzgR1MBNBXf8/KABdlkX68nAhlwcDFLGPCQ=="
    crossorigin=""></script>









    
