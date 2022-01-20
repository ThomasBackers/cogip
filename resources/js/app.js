require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// CONST
const dropdownButton = document.querySelector('.navigation__dropdown-icon')
const dropdownMenu = document.querySelector('.dropdown-menu')

// PRESETS
dropdownMenu.style.height = '0px'

// DROPDOWN MENU
dropdownButton.addEventListener('click', () => {
    dropdownMenu.style.height === '0px' ? dropdownMenu.style.height = '225px' : dropdownMenu.style.height = '0px'
})
