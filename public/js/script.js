// feather Icons
feather.replace();

// Menu
let btnMenu = document.getElementById('btn-menu'),
    btnMenuIcon = document.getElementById('btn-menu-icon'),
    menu = document.getElementById('menu'),
    links = menu.getElementsByTagName('li');

let burgerMenuIcon = '<i data-feather="menu">',
    closeMenuIcon = '<i data-feather="x" >';

function toggleMenu() {
    menu.classList.toggle('d-flex');
    if (window.getComputedStyle(menu).display == 'flex') {
        btnMenuIcon.innerHTML = closeMenuIcon;
    } else {
        btnMenuIcon.innerHTML = burgerMenuIcon;
    }
    feather.replace();
}

btnMenu.addEventListener('click', function () {
    toggleMenu();
});


for (let i = 0; i < links.length; i++) {
    links[i].addEventListener('click', function () {
        toggleMenu();
    })
}

// Button session destroy
let btnSnDestroy = document.getElementById('btn-session-destroy');

btnSnDestroy.addEventListener('click', function(e) {
    e.preventDefault();
    window.location.href = 'sessionDestroy';
});