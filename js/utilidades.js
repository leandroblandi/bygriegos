// author: Leandro Blandi
//
// Funcion que abre o cierra menú de HTML
const verificar = () => {
    // Almacenando datos
    let menu = document.getElementById("menu-nav");
    let estadoActual = menu.style.display;
    // Evaluando si esta abierto, o no.
    if (estadoActual == "none") {
        menu.style.display = "block";
    }   
    else {
        menu.style.display = "none";
    }
}
// Evaluando si pantalla es grande, despues de usar menu
// sí no evalua, el menu no se muestra.
//const esComputadora = () => {
    // Almacenando datos
//    let menu = document.getElementById("menu-nav");
//    let anchoPantalla = window.screen.width;
//    if (anchoPantalla <= 768 && anchoPantalla >= 414) {
//        menu.style.display = "block";
//    }
//}
// Evalua si es pantalla de PC en un intervlo...
//setInterval('esComputadora()',1000); // Se ejecuta cada 1seg.