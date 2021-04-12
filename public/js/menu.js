//INSTRUCCIONES PARA NAVEGADOR DE INICIO
$(document).ready(main);

var contador=1;

function main(){
	$('.menu-bar').click(function(){
		//$('.nav-chico').toggle();
		
		if(contador == 1){
			$('.nav-chico').animate({
				left: '0'
			});
			contador = 0;
		}else {
			contador = 1;
			$('.nav-chico').animate({
				left: '-100%'
			});
		}
		
	});
	
	$(window).resize(function(){
  if(window.innerWidth > 960) {
   $(".nav-chico").removeAttr("style");
  }
 });
}


//INSTRUCCIONES PARA NAVEGADOR USUARIO
$(document).ready(main2);
var contador2=1;
function main2(){
	$('.menu-bar').click(function(){
		//$('.nav-chico').toggle();
		
		if(contador2 == 1){
			$('.nav-usuario').animate({
				left: '0'
			});
			contador2 = 0;
		}else {
			contador2 = 1;
			$('.nav-usuario').animate({
				left: '-100%'
			});
		}
		
	});
}

//INSTRUCCIONES PARA NAVEGADOR SOCIO
$(document).ready(main3);
var contador3=1;
function main3(){
	$('.menu-bar').click(function(){
		//$('.nav-chico').toggle();
		
		if(contador3 == 1){
			$('.nav-socio').animate({
				left: '0'
			});
			contador3 = 0;
		}else {
			contador3 = 1;
			$('.nav-socio').animate({
				left: '-100%'
			});
		}
		
	});
}

//INSTRUCCIONES PARA NAVEGADOR COMPLETO
$(document).ready(main4);
var contador4=1;
function main4(){
	$('.menu-bar').click(function(){
		//$('.nav-chico').toggle();
		
		if(contador4 == 1){
			$('.nav-grande').animate({
				left: '0'
			});
			contador4 = 0;
		}else {
			contador4 = 1;
			$('.nav-grande').animate({
				left: '-100%'
			});
		}
		
	});
}