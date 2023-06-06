//page d'inscription et de connexion

const container = document.getElementById('container');
const loginButton = document.getElementById('login');
const signupButton = document.getElementById('signup');

signupButton.addEventListener('click', () =>{
    container.classList.add('panel-active');
})

loginButton.addEventListener('click', () =>{
    container.classList.remove('panel-active');
})

//responsive
var menu_toogle=document.querySelector('.menu_toogle');
var menu=document.querySelector('.menu');
var menu_toogle_span=document.querySelector('.menu_toogle span');

menu_toogle.onclick = function(){
    menu_toogle.classList.menu_toogle('active');
    menu_toogle_span.classList.toogle('active'); 
    menu.classList.toogle('responsive');
}



    

