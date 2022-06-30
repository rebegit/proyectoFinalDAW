  <!--en caso de q exista, entonces: -->
  <?php if (isset($_POST['submit'])): 
            $nombre= $_POST['nombre'];
            $apellido= $_POST['apellido'];
            $email= $_POST['email'];
            $regalo= $_POST['regalo'];
            $total= $_POST['total_pedido'];
            $fecha= $_POST['nombre'];
            $fecha= date ('Y-m-d H:i:s'); //formato 
            
            
            //Pedidos
            $boletos= $_POST['boletos'];
            $camisas= $_POST['pedido_extra']['camisas']['cantidad']; //xq es array
            $etiquetas= $_POST['pedido_extra']['etiquetas']['cantidad'];
                   
                //crear funcion que convierta a JSON
                function productos_json(&$boletos, &$camisas=0, &$etiquetas=0 ){ //& =pasar por referencia: que los datos se mantengan, que tome valores originales. si no hay, que este a 0 por defecto
                    //echo "hola desde funcion";
                    $dias =array(0=> 'musica', 1=> 'teatro', 2=>'tematica' );
                    $total_boletos=array_combine($dias, $boletos);
                    $json= array();

                    foreach($total_boletos as $key=> $boletos):
                        if((int) $boletos>0):
                            $json[$key]= (int) $boletos;
                        endif;
                    endforeach;

                    /*echo "<pre>";
                    var_dump($total_boletos);
                    echo "</pre>";*/

                    $camisas= (int) $camisas;
                    if ($camisas >0):
                        $json['camisas']=$camisas;
                    endif;

                    $etiquetas =(int) $etiquetas;
                    if ($etiquetas >0):
                        $json['etiquetas']=$etiquetas;
                    endif;

                return json_encode($json); //devuelve json formateado. json_encode siemrpe en array
                }
                
                $pedido= productos_json($boletos, $camisas, $etiquetas);
                //echo $pedido;
               /* echo "<pre>";
                var_dump($pedido);
                echo "</pre>";*/


            //Eventos
            $eventos= $_POST['registro'];

            function eventos_json(&$eventos) { //DECLARAR FUNCION ANTES DE LLAMARLA!!
                $eventos_json =  array();      
                foreach($eventos as $evento):
                      $eventos_json['eventos'][] = $evento;
                endforeach;
                return json_encode($eventos_json);
            }

            $registro= eventos_json($eventos);
           /* echo "<pre>";
            var_dump($registro);
            echo "</pre>";*/



            try {
               
                $conn = new mysqli('localhost:3308','root','','proyectofinal'); //conexion

                if($conn->connect_error){
                    echo $error->$conn->connect_error;
                }

                //evitar ataques sql
                $stmt = $conn->prepare("INSERT INTO registrados (nombre_registrado, apellido_registrado, email_registrado, fecha_registro, pases_articulos, talleres_registrados, regalo, total_pagado) VALUES (?,?,?,?,?,?,?,?)");
                //s xq es string y i xq es int, tantos como haya
                $stmt->bind_param("ssssssis", $nombre, $apellido, $email, $fecha, $pedido, $registro, $regalo, $total);
                $stmt->execute();
                $stmt->close();
                $conn->close();
                header ('Location: validar_registro.php?exitoso=1'); //!!!PARA QUE NO HAYA REGISTROS REPETIDOS AL RECARGAR LA PAGINA!!!!!

            }catch(\Exception $e) {
                echo $e->getMessage();
            }





        ?>
    <?php endif;?>




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
        <h2>Resumen Registro</h2>

        <p style = "font-size:22px;background-color:yellow;text-align:center;" >
            <?php if(isset($_GET['exitoso'])):
                if (($_GET)['exitoso'] =="1"):
                    echo "¡REGISTRO EXITOSO!";
                endif;
            endif; ?>
            
        </p>   
            

        

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
                    by JuanDevWP</a>
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
   
    