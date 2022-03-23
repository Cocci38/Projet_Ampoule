

function passVerif() { // Fonction verif également sur l'input du 2ème mot de passe
    console.log("pasVerif");
    const pass = document.getElementById('password1').value; // .value pour que la variable soit une valeur
    const pass_bis = document.getElementById('password2').value;
    let envoie = document.getElementById('envoie');
    const error = document.getElementById('error'); //div qui s'active en rouge si il y a une erreur

    console.log("pass : "+pass);
    console.log("pass_bis : "+pass_bis);
    if (pass!=pass_bis) {
        console.log('non oki');
        error.innerHTML = 'ATTENTION, le mot de passe est différent'
        envoie.disabled = true;
    }else{
        console.log('oki');
        error.innerHTML = "";
        envoie.disabled = false;
    }
}
//pass_bis.onblur = function () {

//}


// envoie.addEventListener('invalid', () =>{
//         if (pass!=pass_bis) {
//             console.log('top');
//             error.innerHTML = 'ATTENTION, le mot de passe est différent'
//         }
// });
    
// pass_bis.onfocus = function () {
//     if (pass!=pass_bis) {
//         console.log('oki');
//         error.innerHTML = ''
//     }
// };



// pass.addEventListener('input', () =>{
//     console.log('oki');
// })