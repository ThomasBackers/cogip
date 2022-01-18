// CONST
const main = document.querySelector('main')
// const burgerMenu = document.querySelector('.header__nav__burger-menu')
// const navList = document.querySelector('.mobile-nav__list')

// MAIN HEIGHT SIZING
const vhToPixels = vh => { return Math.round(window.innerHeight / (100 / vh)) }
main.style.minHeight = vhToPixels(100) + 'px'
window.addEventListener('resize', () => {
    main.style.minHeight = vhToPixels(100) + 'px'
})

// BURGER MENU
// navList.style.height = '0'
// burgerMenu.addEventListener('click', () => {
//     if (navList.style.height === '0px') navList.style.height = '270px'
//     else navList.style.height = '0px'
// })
