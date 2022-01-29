let inputUserName = document.querySelector('#username');
let togglePassword = document.querySelector('#toggle-password');
let inputPassword = document.querySelector('#password');
let loginForm = document.querySelector('#login');
let signUp = document.querySelector('#sign-up');

togglePassword.addEventListener('click',()=>{
    if(togglePassword.checked)inputPassword.type='text';
    else inputPassword.type='password';
});
window.addEventListener('pageshow',()=>{
    loginForm.reset();
});
signUp.addEventListener('click',e=>{
    e.preventDefault();
    window.location.href='signup/index.php';
});
