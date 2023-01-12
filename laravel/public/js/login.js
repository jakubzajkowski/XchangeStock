let username=document.querySelector('.login__username');
let password=document.querySelector('.login__password');
let passwordDiv=document.querySelector('.login--login');
let usernameDiv=document.querySelector('.login--username');
let form = document.querySelector('form')

let usernameBefore = window.getComputedStyle(usernameDiv, '::before');
let passwordBefore = window.getComputedStyle(passwordDiv, '::before');
username.addEventListener('click',()=>{
    form.style.setProperty('--usernameLogin',"-100%")
})
password.addEventListener('click',()=>{
    form.style.setProperty('--passwordLogin',"-100%")
})

