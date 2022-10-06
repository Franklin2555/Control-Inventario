/* --------------------------------------------------------- */
/*Mostrar ocultar menú principal*/
let btn = document.querySelector("#sideMenu");
let sidebar = document.querySelector(".sidebar");

btn.onclick = function() {
	sidebar.classList.toggle("active");
}
/* --------------------------------------------------------- */
