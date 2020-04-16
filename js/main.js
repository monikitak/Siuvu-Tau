
let mainMenu = document.getElementById('js-menu-list');
let menuToggle = document.getElementById('js-menu-toggle');

menuToggle.addEventListener('click', function () {

    mainMenu.classList.toggle('active-menu');
});
