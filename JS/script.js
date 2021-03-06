const changeHeight = document.querySelector('.navbar');
const changeMenuBar = document.querySelector('.menu-bar');
const navbarList = document.querySelector('.nav-list-item');
document.querySelector('.menu-bar').addEventListener('click',()=>{
    changeHeight.classList.toggle('change');
    changeMenuBar.classList.toggle('menu-bar-rotate');
    navbarList.classList.toggle('show-list');
});