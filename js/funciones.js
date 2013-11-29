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
		$("#ranimg, #Table_01, #productos-nuevos, #contacto, #acercade, #ax, #servicios, #map, #federatas, #e404").hide();
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
     //Simular el evento hover al hacer click en pantallas táctiles
    var myLinks = document.getElementsByTagName('a');
	for(var i = 0; i < myLinks.length; i++){
	   myLinks[i].addEventListener('touchstart', function(){this.className = "hover";}, false);
	   myLinks[i].addEventListener('touchend', function(){this.className = "";}, false);
	}
     $('.vbox-close').click(
      function ocultar()
      {
           $(".vbox-overlay").toggle();
      }
   );
}

function calcHeight()
{
	 //Cojo la altura en nuestra página
	 var the_height=
	 document.getElementById
	('iframe').contentWindow.
	 document.body.scrollHeight;
	//Cambio la altura del iframe
	 document.getElementById('iframe')
	.height= the_height;
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

// Mobile Safari in standalone mode
if(("standalone" in window.navigator) && window.navigator.standalone){
 
	// If you want to prevent remote links in standalone web apps opening Mobile Safari, change 'remotes' to true
	var noddy, remotes = false;
	
	document.addEventListener('click', function(event) {
		
		noddy = event.target;
		
		// Bubble up until we hit link or top HTML element. Warning: BODY element is not compulsory so better to stop on HTML
		while(noddy.nodeName !== "A" && noddy.nodeName !== "HTML") {
	        noddy = noddy.parentNode;
	    }
		
		if('href' in noddy && noddy.href.indexOf('http') !== -1 && (noddy.href.indexOf(document.location.host) !== -1 || remotes))
		{
			event.preventDefault();
			document.location.href = noddy.href;
		}
	
	},false);
}

// bloquear el zoom en iOS
MBP.scaleFix();
}