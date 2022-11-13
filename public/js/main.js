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

/* Función de máscara para el campo de "Filtrado" de ventas */
function mask_up() {
	let id = document.getElementById("input_id");
	if (id.value.length == 4 || id.value.length == 7) {
		id.value += "-";
	}
}
