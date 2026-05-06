const toggle    = document.getElementById('nav-toggle');
const menu      = document.getElementById('nav-menu');
const hamburger = document.getElementById('nav-hamburger');
const cancel    = document.getElementById('nav-cancel');

toggle.addEventListener('click', () => {
    menu.classList.toggle('hidden');
    hamburger.classList.toggle('hidden');
    cancel.classList.toggle('hidden');
});

document.querySelectorAll('.nav-link').forEach(link => {
    link.addEventListener('click', () => {
        menu.classList.add('hidden');
        hamburger.classList.remove('hidden');
        cancel.classList.add('hidden');
    });
});
