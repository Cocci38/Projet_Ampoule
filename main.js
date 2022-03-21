// let attribut = document.getElementById('btn');
// const attributID = btn.getAttribut("id");
// const bouton = document.getElementById('btn');
// const attributID = bouton.getAttribut("id");
// console.log(attributID);

//const bouton = document.getElementById('btn-52');
const alerte = document.getElementById('alerte');
//const supprim = document.getElementById('supprim');
const annuler = document.getElementById('annuler');
const toast = document.getElementById('toast');
// bouton.addEventListener('click', () => {
//     alerte.classList.add('show');
//     console.log(bouton);
// });

// supprim.addEventListener('click', () => {
//     alerte.classList.remove('show');
// });

function getId(clicked_id) {
    console.log(clicked_id);
    alerte.classList.add('show');
}
function replyId(clicked_id) {
    console.log(clicked_id);
    toast.classList.add('show');
}
annuler.addEventListener('click', () => {
        alerte.classList.remove('show');
});