const menu = document.querySelector('.menu input');
const input1 = document.querySelector('.pencarian .js1');
const input2 = document.querySelector('.pencarian .js2');
const input3 = document.querySelector('.pencarian .js3');
const div = document.querySelector('.Isi');
const nav = document.querySelector('nav ul');

menu.addEventListener('click',function () {
    nav.classList.toggle('muncul');
    input1.classList.toggle('ngumpet');
    input2.classList.toggle('ngumpet');
    input3.classList.toggle('ngumpet');
    div.classList.toggle('ngumpet');
});

