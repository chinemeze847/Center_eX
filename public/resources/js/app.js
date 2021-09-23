

const navDrawer = document.getElementById('nav-drawer');
const navDrawerOpenButton = document.getElementById('open-nav-drawer-button');
const navDrawerCloseButton = document.getElementById('close-nav-drawer-button');
const programmesMenuOpenButton = document.getElementById('open-programmes-button');
const navDrawerProgrammes = document.getElementById('nav-drawer-programmes');

navDrawerOpenButton.addEventListener('click', openNavDrawer);
navDrawerCloseButton.addEventListener('click', closeNavDrawer);
programmesMenuOpenButton.addEventListener('click', function (e) {
  e.preventDefault();
  navDrawerProgrammes.classList.toggle('h-0');
});

function openNavDrawer(e) {
  e.preventDefault();
  navDrawer.classList.remove('end-100');
}

function closeNavDrawer(e) {
  e.preventDefault();
  navDrawer.classList.add('end-100');
}



