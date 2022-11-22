/* --------------------------------------------------------- */
/*Mostrar ocultar menú principal*/
var btn = document.querySelector("#sideMenu");
var sidebar = document.querySelector(".sidebar");
var content = document.querySelector(".py-4");


btn.onclick = function() {
	sidebar.classList.toggle("active");
	content.classList.toggle("active");
}

/* --------------------------------------------------------- */

/* --------------------------------------------------------------------------- */
/*
function displayAlert(title, content) {
	swal({
		title: title,
		text: content,
		icon: "info",
		button: "Cerrar",
	});
}

let show = document.getElementById("ver");
if (!show) {
	console.log("No funciona");
} else {
  show.addEventListener('mouseover', function() {
	displayAlert('Ayuda', 'Visualizar el contenido')
  }, { once: true });
}

let edit = document.getElementById("editar");
if (!edit) {
	console.log("No funciona");
} else {
  edit.addEventListener('mouseover', function() {
	displayAlert('Ayuda', 'Editar el contenido')
  }, false);
}
/* --------------------------------------------------------------------------- */