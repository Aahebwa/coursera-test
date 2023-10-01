const menuBar = document.querySelector('.bar');
const navigator = document.querySelector('.headerUl');

menuBar.addEventListener('click', () => {

    navigator.classList.toggle("active");

})