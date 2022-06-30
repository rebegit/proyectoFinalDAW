
(function(){
    "use strict";

    var regalo=document.getElementById("regalo");
    document.addEventListener('DOMContentLoaded', function(){

      

    console.log("listo");

        //Campos Datos Usuario
        var nombre= document.getElementById('nombre');
        var apellido= document.getElementById('apellido');
        var email= document.getElementById('email');


        //Campos pases
        var pase_musica= document.getElementById('pase_musica');
        var pase_tematica= document.getElementById('pase_tematica');
        var pase_teatro= document.getElementById('pase_teatro');


        //Botones y divs
        var calcular= document.getElementById('calcular');
        var errorDiv= document.getElementById('error');
        var botonRegistro= document.getElementById('btnRegistro');
        var lista_productos= document.getElementById('lista-productos');
        var suma= document.getElementById('suma-total');


        //Extras
        var camisas= document.getElementById('camisa_evento');
        var etiquetas= document.getElementById('etiquetas');


        //Que el cliente no pueda pagar sin darle antes a calcular su pedido
        botonRegistro.disabled=true;
        



        //Eventos
        calcular.addEventListener('click', calcularTotal); //cuando se de click en boton de calcular
        pase_musica.addEventListener('blur', mostrarDias) //para que se cambie el valor al introducir cualquier numero
        pase_tematica.addEventListener('blur', mostrarDias) //para que se cambie el valor al introducir cualquier numero
        pase_teatro.addEventListener('blur', mostrarDias) //para que se cambie el valor al introducir cualquier numero

        nombre.addEventListener('blur', validarCampos);
        apellido.addEventListener('blur', validarCampos);
        email.addEventListener('blur', validarCampos);
        function validarCampos(){
            if(this.value==''){
                errorDiv.style.display="block";
                errorDiv.innerHTML="Este campo es obligatorio";
                this.style.border= '1px solid red';
                errorDiv.style.border= '1px solid red';
            }else{
                errorDiv.style.display='none'; //en caso de que haya algo que lo oculte
                this.style.border= '1px solid black';
            }
        }

        email.addEventListener('blur', validarEmail);
        function validarEmail(){
            var exp= /^([\da-z_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/ //validando con expresión regular
            if(exp.test(this.value)){
                errorDiv.style.display='none'; 
                this.style.border= '1px solid black';
            }else{
                errorDiv.style.display="block";
                errorDiv.innerHTML="debe ser una direccion de correo válida";
                this.style.border= '1px solid red';
                errorDiv.style.border= '1px solid red';
            }
        }

        //Funciones pagos
        function calcularTotal (event){
            event.preventDefault();
            console.log("has hecho click en calcular");
            if (regalo.value===''){
                alert('debes elegir un regalo')
                regalo.focus();
            }else{
                console.log ('ya elegiste regalo')
                console.log (pase_musica.value)
                console.log (pase_tematica.value)
                console.log (pase_teatro.value)
                var boletosMusica= parseInt(pase_musica.value, 10)||0, /*para que no de fallos*/ 
                    boletosTematica= parseInt(pase_tematica.value,10)||0,
                    boletosTeatro = parseInt(pase_teatro.value,10)||0,
                    cantCamisas= parseInt(camisas.value, 10)||0,
                    cantEtiquetas= parseInt(etiquetas.value, 10)||0;



                console.log("Boletos musica:" + boletosMusica)
                console.log("Boletos tematica:" + boletosTematica)
                console.log("Boletos teatro:" + boletosTeatro);


                var totalPagar= (boletosMusica * 25) +(boletosTematica *50)+ (boletosTeatro*35) +((cantCamisas*10)*.75)+ (cantEtiquetas*2);
                console.log("Total pagar:"+totalPagar)

                var listadoProductos=[]; 
                //para que se muestre si es seleccionado
                if(boletosMusica>=1){
                    listadoProductos.push('Musica= ' +boletosMusica);
                }
                if(boletosTeatro>=1){
                    listadoProductos.push('Teatro= ' +boletosTeatro);
                }
                if(boletosTematica>=1){
                    listadoProductos.push('Tematica= ' +boletosTematica);
                }
                if(cantCamisas>=1){
                    listadoProductos.push('Camisas= ' +cantCamisas);
                }
                if(cantEtiquetas>=1){
                    listadoProductos.push('Etiquetas= ' +cantEtiquetas);
                }
                console.log(listadoProductos); //mostramos todo

                lista_productos.style.display="block";
                lista_productos.innerHTML = ''; //es por si se cambi aun valor, que no se vuelva a escribir todo
                for (var i =0; i<listadoProductos.length; i++){
                    lista_productos.innerHTML += listadoProductos[i] + '<br/>';
                }

                suma.innerHTML=  totalPagar.toFixed(2)+ "€ "; //para que solo tenga 2 decimales

                botonRegistro.disabled=false;
                document.getElementById('total_pedido').value=totalPagar; //para saber cuando paga cada usuario
            }
        }

        function mostrarDias(){
            console.log(pase_musica.value)
            var boletosMusica= parseInt(pase_musica.value, 10)||0, /*para que no de fallos*/ 
                    boletosTematica= parseInt(pase_tematica.value,10)||0,
                    boletosTeatro = parseInt(pase_teatro.value,10)||0;

            var diasElegidos =[];
            
            if (boletosMusica>0){
                diasElegidos.push('musica') //en relacion con el ID del html !!!!
            }
            if (boletosTeatro>0){
                diasElegidos.push('teatro') //  diasElegidos.push('teatro', 'musica')
            }
            if (boletosTematica>0){
                diasElegidos.push('tematica')
            }
            for (var i=0; i< diasElegidos.length; i++){
                document.getElementById(diasElegidos[i]).style.display="block"; //para que se muestren cuando indique numero, porque los he ocultado en css
            }
        }

    }); //DOM CONTENT LOADED


  
})();

  //Colorbox
//$('.invitado').colorbox({inline:true, with:"50%"});
$(".invitado-info").colorbox({inline:!0,width:"50%"}),

$(".boton_newsletter").colorbox({inline:!0,width:"50%"});

//barra menu ocultar y mostrar
$(".menu-movil").on("click",function(){$(".navegacion-principal").slideToggle()});


//contadores index
jQuery(".resumen-evento").length>0&&$(".resumen-evento").waypoint(function(){
    $(".resumen-evento li:nth-child(1) p").animateNumber({number:6},1200),
    $(".resumen-evento li:nth-child(2) p").animateNumber({number:30},1200),
    $(".resumen-evento li:nth-child(3) p").animateNumber({number:6},1500),
    $(".resumen-evento li:nth-child(4) p").animateNumber({number:5},1500)},
    {offset:"60%"}),
    $(".cuenta-regresiva").countdown("2022/07/01 09:00:00",function(n){
        $("#dias").html(n.strftime("%D")),
        $("#horas").html(n.strftime("%H")),
        $("#minutos").html(n.strftime("%M")),
        $("#segundos").html(n.strftime("%S"))});





	

