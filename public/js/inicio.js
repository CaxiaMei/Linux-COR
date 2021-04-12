$(document).ready(function () {

    var verificar=$(".verificar").val();
    
    if(verificar=="1"){
    //Hogar y oficina   
    $("nav").css({
        "background-color": "transparent",
        "position": "absolute"
     });
    
    }

    
    //Abrir el menu
    $(".cuadrado  .p").addClass("open");
    $(".cuadrado  .s").addClass("open");
    $(".cuadrado  .b").addClass("open");
    $("nav .menu").removeClass("bounceOutRight");
    $("nav .menu").addClass("bounceInRight");
    $("nav .menu").fadeIn('slow');
						 
    //el logo crownClean del nav dirige al index
    $(".logo").click(function () {
        var url = $("#url").val();
        window.location.href = url;
    });

    //Variable
    var palanca = true;


    $(".reservar").click(function () {
        var url = $("#url").val();
        window.location.href = url + "registro/index/login/1";
    });

    $(".prestar").click(function () {
        var url = $("#url").val();
        window.location.href = url + "registro/index/login/2";
    });

    //Ir a hogar info
    $(".btn-hogar").click(function () {
        var url = $("#url").val();
        window.location.href = url + "inicio/hogar";
    });

    //Ir a hogar info
    $(".btn-oficina").click(function () {
        var url = $("#url").val();
        window.location.href = url + "inicio/oficina";
    });
	
    //Privacidad
    $(".btn-privacidad").click(function () {
        var url = $("#url").val();
        window.location.href = url + "inicio/privacidad";
    });
	
    //Oportunidad laboral
    $(".btn-op-laboral").click(function () {
        var url = $("#url").val();
        window.location.href = url + "inicio/oportunidad_laboral";
    });
	
    //Preguntas frecuentes
    $(".btn-preguntas-f").click(function () {
        var url = $("#url").val();
        window.location.href = url + "inicio/preguntas";
    });
	
    //Terminos 
    $(".btn-terminos").click(function () {
        var url = $("#url").val();
        window.location.href = url + "inicio/terminos";
    });
		
    //Cobertura
    $(".btn-cobertura").click(function () {
        var url = $("#url").val();
        window.location.href = url + "inicio/cobertura";
    });
	
    //Conocenos
   /* $(".btn-conocenos").click(function () {
        var url = $("#url").val();
        window.location.href = url + "inicio/conocenos";
    });
	
    //Conocenos
    $(".btn-experiencias").click(function () {
        var url = $("#url").val();
        window.location.href = url + "inicio/experiencias";
    });
	
	//social media
    $(".btn-facebook").click(function () {
        window.open( "https://es-la.facebook.com/");
    });

    $(".btn-instagram").click(function () {
        window.open( "https://www.instagram.com/");
    });

    $(".btn-twitter").click(function () {
        window.open( "https://twitter.com/");
    });
	
    $(".btn-youtube").click(function () {
        window.open( "https://www.youtube.com/");
    });

*/
    //Carrusel
    $('.main-carousel').flickity({
        // options
        cellAlign: 'left',
        contain: true,
        draggable: true,
        freeScroll: true,
        wrapAround: true
    });


    //=========================================   

    //MOSTRAR NAV      
    $(".cuadrado").click(function () {

        if (palanca == false) {
            $(".cuadrado  .p").addClass("open");
            $(".cuadrado  .s").addClass("open");
            $(".cuadrado  .b").addClass("open");
            $("nav .menu").removeClass("bounceOutRight");
            $("nav .menu").addClass("bounceInRight");
            $("nav .menu").fadeIn('slow');
            palanca = true;
        } else {
            $("nav .menu").addClass("bounceOutRight");
            palanca = false;
            $(".cuadrado  .p").removeClass("open");
            $(".cuadrado  .s").removeClass("open");
            $(".cuadrado  .b").removeClass("open");
        }
    });


    //quitar borde verde de menu
    /*var aux;
    $(".menu a").hover(function () {
        $(".ini").removeClass("bor");
        aux = $(this);
    }, function () {
        setTimeout(function () {
            aux.addClass("bor");
        }, 2500);
    });*/
    //============================ FUNCTION IR ARRIBA
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.btn-float').addClass("ir");
        } else {
            $('.btn-float').removeClass("ir");
        }
    });

    $('.btn-float').click(function () {
        $("html, body").animate({
            scrollTop: 0
        }, 1000);

    });
    
  
  
    var switch_pregunta=false;
  
    //Mostrar preguntas de ver mas
    $(".info-preg-frec-seccion_10 .ver_mas").click(function(){     
      
      var esto=$(this);
      
      if(switch_pregunta==false){
     $(".otras-preguntas").show();
      esto.text("Ver menos");
      switch_pregunta=true;  
      }else{
        $(".otras-preguntas").hide();
        esto.text("Ver mas");
        switch_pregunta=false; 
      }   
    });
  
  
  
    var switch_pregunta=false;
  
    //Mostrar preguntas de ver mas
    $(".info-socio-seccion_10 .ver_mas").click(function(){     
      
      var esto=$(this);
      
      if(switch_pregunta==false){
     $(".otras-preguntas").show();
      esto.text("Ver menos");
      switch_pregunta=true;  
      }else{
        $(".otras-preguntas").hide();
        esto.text("Ver mas");
        switch_pregunta=false; 
      }   
    });
  
  
  
     var switch_pregunta2=false;
      //Mostrar preguntas de ver mas
    $(".info-user-seccion_5 .ver_mas").click(function(){           
      var esto=$(this);
      
      if(switch_pregunta2==false){
     $(".otras-preguntas").show();
      esto.text("Ver menos");
      switch_pregunta2=true;  
      }else{
        $(".otras-preguntas").hide();
        esto.text("Ver mas");
        switch_pregunta2=false; 
      }   
    });
	
	

});

function Mostrar(){
	document.getElementById("caja").style.display = "block";
}
function Ocultar(){
	document.getElementById("caja").style.display = "none";
}
function Mostrar_Ocultar(){
	var caja = document.getElementById("caja");
	
	
	if(caja.style.display == "none"){
		Mostrar();
		document.getElementById("boton").value = "Ver menos";
	}
	else{
		Ocultar();
		document.getElementById("boton").value = "Ver más";
	}
}
//BOTÓN VER MÁS PARA LA PÁGINA DE SOCIO.
function MostrarSocio(){
	document.getElementById("caja2").style.display = "block";
}
function OcultarSocio(){
	document.getElementById("caja2").style.display = "none";
}
function Mostrar_OcultarSocio(){
	var caja2 = document.getElementById("caja2");
	
	
	if(caja2.style.display == "none"){
		MostrarSocio();
		document.getElementById("boton2").value = "Ver menos";
	}
	else{
		OcultarSocio();
		document.getElementById("boton2").value = "Ver más";
	}
}
//BOTÓN VER MÁS PARA LA PÁGINA DE Usuario.
function MostrarUser(){
	document.getElementById("caja3").style.display = "block";
}
function OcultarUser(){
	document.getElementById("caja3").style.display = "none";
}
function Mostrar_OcultarUser(){
	var caja3 = document.getElementById("caja3");
	
	
	if(caja3.style.display == "none"){
		MostrarUser();
		document.getElementById("boton3").value = "Ver menos";
	}
	else{
		OcultarUser();
		document.getElementById("boton3").value = "Ver más";
	}
}

//Ventana de cookies 
let close_button = document.getElementById('close-button');
close_button.addEventListener("click", function(e) {
    e.preventDefault();
    document.getElementById("window-notice").style.display = "none";
});


//Validación de Formulario nuevo.

	

