let signUp = document.querySelector('#sign-up');
let bankAccount = document.querySelector('#bank-account');
let slider = document.querySelector('#slider');
let age = document.querySelector('#input-age');
let inputPassword = document.querySelectorAll('.input-password');
let showPassword = document.querySelector('#show-password');

bankAccount.addEventListener('focus',()=>{
    bankAccount.value = 'Charot';
    bankAccount.disabled=true;
});
slider.addEventListener('input',()=>{
    age.value = slider.value;
});
age.addEventListener('input',()=>{
    slider.value = age.value;
});
showPassword.addEventListener('click',()=>{
    if(showPassword.checked)
    inputPassword.forEach(e=>{
        e.type='text';
    });
    else 
    inputPassword.forEach(e=>{
        e.type='password';
    });
});
signUp.addEventListener('submit',(e)=>{
    if(inputPassword[0].value!==inputPassword[1].value){
        alert('Passwords do not match!');
        e.preventDefault();
    }
    if(!/[A-Z]/.test(inputPassword[0].value)){
        alert('Passwords must contain at least 1 uppercase character');
        e.preventDefault();
    }
    if(!/[1-9]/.test(inputPassword[0].value)){
        alert('Passwords must contain at least 1 number');
        e.preventDefault();
    }
    if(inputPassword[0].value.length<7){
        alert('Passwords must be at least 8 characters long');
        e.preventDefault();
    }
});
