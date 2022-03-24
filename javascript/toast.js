const confirmation = document.querySelector('.confirmation');
const toast = document.querySelector('.toast');

confirmation.addEventListener('click', () => {
    toast.classList.add('show');
})




// function getId(clicked_id) {
//     console.log(clicked_id);
// }
// console.log('oki');
// toast.classList.add('show');
// function Timer2() {
//     var monEvent=document.getElementById("confirmation");
//     monEvent.innerHTML = "Lancement réalisé";
//     monEvent.parentNode.style.backgroundColor="#ff0";
//     monEvent.parentNode.style.borderColor="#f00";
// }
// setTimeout("Timer2()",5000);