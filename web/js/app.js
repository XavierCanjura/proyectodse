//DECLARACION DE CONSTANTES
const buttonMenu = document.getElementById('btnMenu');
const container = document.getElementById('contenedor');
const iconMenu = document.getElementById('iconMenu');

//Event Listeners
buttonMenu.addEventListener('click', toggleBody);

//Funtions
function toggleBody()
{
    container.classList.contains('active') ? container.classList.remove('active') : container.classList.add('active');
    iconMenu.classList.contains('active') ? iconMenu.classList.remove('active') : iconMenu.classList.add('active');
}