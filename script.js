window.onload = function(){
	var x = document.getElementById("Projects")
	var y = document.getElementById("Skills")
	var z = document.getElementById("Contact")
	
	x.style.display = "block"
	y.style.display = "none"
	z.style.display = "none"

	document.getElementById('MenuUno').className = "active"
	document.getElementById('MenuDos').className = "desactive"
	document.getElementById('MenuTres').className = "desactive"
}

function show(param_div_id){
	var x = document.getElementById("Projects")
	var y = document.getElementById("Skills")
	var z = document.getElementById("Contact")

	if(param_div_id === "Projects"){
		x.style.display = "block"
	    y.style.display = "none"
	    z.style.display = "none"

	    document.getElementById('MenuUno').className = "active"
	    document.getElementById('MenuDos').className = "desactive"
	    document.getElementById('MenuTres').className = "desactive"
	}
	else if(param_div_id === "Skills"){
		x.style.display = "none"
	    y.style.display = "block"
	    z.style.display = "none"

	    document.getElementById('MenuUno').className = "desactive"
	    document.getElementById('MenuDos').className = "active"
	    document.getElementById('MenuTres').className = "desactive"
	}else if(param_div_id === "Contact"){
		x.style.display = "none"
	    y.style.display = "none"
	    z.style.display = "block"

	    document.getElementById('MenuUno').className = "desactive"
	    document.getElementById('MenuDos').className = "desactive"
	    document.getElementById('MenuTres').className = "active"
	}
	
}

const typed = new Typed('.typed', {
    strings: [
    '<i class="word">Dessarrollador web</i>',
    '<i class="word">Dessarrollador de software</i>',
    '<i class="word">Dessarrollador estudiante</i>',
    '<i class="word">Gamer</i>'],
    stringsElement: '#cadenas-texto', // ID del elemento que contiene cadenas de texto a mostrar.
	typeSpeed: 75, // Velocidad en mlisegundos para poner una letra,
	startDelay: 300, // Tiempo de retraso en iniciar la animacion. Aplica tambien cuando termina y vuelve a iniciar,
	backSpeed: 75, // Velocidad en milisegundos para borrrar una letra,
	smartBackspace: true, // Eliminar solamente las palabras que sean nuevas en una cadena de texto.
	shuffle: false, // Alterar el orden en el que escribe las palabras.
	backDelay: 1500, // Tiempo de espera despues de que termina de escribir una palabra.
	loop: true, // Repetir el array de strings
	loopCount: false, // Cantidad de veces a repetir el array.  false = infinite
	showCursor: true, // Mostrar cursor palpitanto
	cursorChar: '<i class="word"> |</i>', // Caracter para el cursor
	contentType: 'html', // 'html' o 'null' para texto sin formato
});

