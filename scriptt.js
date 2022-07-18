let navPhoneButtons = document.querySelectorAll(".nav-links a");

let bigNavPhone = document.querySelector(".nav-links");

navPhoneButtons.forEach(navPhoneButtons => {

    navPhoneButtons.addEventListener('click', event => {
     bigNavPhone.style.height="0vh";
    });
 
 });

document.querySelector(".nav-btn").addEventListener("click", () =>{
    if(bigNavPhone.style.height=="100vh") {
        bigNavPhone.style.height="0vh";
    } else {
        bigNavPhone.style.height="100vh";
    }
   
   
})