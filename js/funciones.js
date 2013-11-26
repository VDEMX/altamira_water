$(document).on("ready", inicio);
function inicio () 
{
	//slider
	$('.flexslider').flexslider({
		animation: "slide"
	});
	//botones para el iframe
	$(".boton").click(function toggle(){
		//quitar todas las clases .active
		$(".active").removeClass("active");
		//agregar la clase .active al boton al que hicimos click:
		$(this).addClass("active");
		//esconder el mapa
		$("#ranimg, #Table_01, #productos-nuevos, #contacto, #acercade, #ax, #servicios, #map, #federatas").hide();
		$("#iframe").show();
	});
	//acordión del menú táctil
	$('ul').accordion();
	//formulario de contacto
	$('#myform').html5form({
        method: 'POST',
        messages : 'es', // Opciones 'en', 'es', 'it', 'de', 'fr', 'nl', 'be', 'br'
        responseDiv : '#respuesta',
        allBrowsers: true,  
    });
     $('.vbox-close').click(
      function ocultar()
      {
           $(".vbox-overlay").toggle();
      }
   );
}

// Scripts para iOS
if((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i)))
{
// Ocultar la barra de dirreciones en iOS
// Cuando este listo
window.addEventListener("load",function cargar() {
  // Set a timeout...
  setTimeout(function seacaboeltiempo(){
    // Hide the address bar!
    window.scrollTo(0, 1);
  }, 0);
  
});

// bloquear el zoom en iOS
MBP.scaleFix();
}

// Respond.js
yepnope({
	test : Modernizr.mq('(only all)'),
	nope : ['respond.min.js']
});