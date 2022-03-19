const bouton = document.getElementById('btn');
const alerte = document.getElementById('alerte');
const supprim = document.getElementById('supprim');
const annuler = document.getElementById('annuler');

bouton.addEventListener('click', () => {
    alerte.classList.add('show');
});

supprim.addEventListener('click', () => {
    alerte.classList.remove('show');
});

annuler.addEventListener('click', () => {
    alerte.classList.remove('show');
});