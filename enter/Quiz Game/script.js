let questions = document.querySelectorAll('.item');
let next = document.querySelectorAll('.next');
let reveal = document.querySelectorAll('.reveal-answer');
let submit = document.querySelectorAll('.submit');
let extract = document.querySelector('#extract');
let correctAnswers = ['A','B','C','C','B'];
let score = 0, page=0;

next.forEach(e=>{
    e.disabled=true;
    e.addEventListener('click',()=>{
        questions[page].style.display="none";
        page++;
        questions[page].style.display="flex";
        if(page==5){
            extract.value=score;
        }
    });
});
questions.forEach(e=>{
    questions[page].style.display="flex";
    e.addEventListener('submit',()=>{
        submit[page].disabled=true;
        let getClassName = e.className.replace(' item','');
        let selected = document.querySelector(`.${getClassName} input[type="radio"]:checked`);
        let choices = document.querySelectorAll(`.${getClassName} input[type="radio"]`);

        choices.forEach(g=>{
            g.disabled = true;
        });
        
        next[page].disabled=false;
        reveal[page].classList.add('show');

        if(selected.value==correctAnswers[page])score++;
    });     
});
for(let i=0;i<questions.length-1;i++){
    questions[i].addEventListener('submit',e=>{
        e.preventDefault();
    });
}
