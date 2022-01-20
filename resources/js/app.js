require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

// CONST
const dropdownButton = document.querySelector('.navigation__dropdown-icon')
const dropdownMenu = document.querySelector('.dropdown-menu')

// PRESETS
dropdownButton.style.transform = 'rotate(0deg)'
dropdownMenu.style.height = '0px'

// DROPDOWN MENU
dropdownButton.addEventListener('click', () => {
    dropdownButton.style.transform === 'rotate(0deg)' ? dropdownButton.style.transform = 'rotate(180deg)' : dropdownButton.style.transform = 'rotate(0deg)'
    dropdownMenu.style.height === '0px' ? dropdownMenu.style.height = '225px' : dropdownMenu.style.height = '0px'
})
